<?php
/*
 * Copyright 2015 NACOSS UNN Developers Group (NDG).
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

if (isset($array['post_edit_button'])) {

    //URL for back link
    $url = $array["url"];
    $id = $array["id"];

    try {
        $array['expire_time'] = $array['exp_date'] . " " . $array['exp_time'];
        $success = $admin->modifyPost($id, $array['title'], $array['content'], $array['expire_time']);
        if (!$success) {
            $error_message = "Oops! something went wrong";
        }
    } catch (Exception $exc) {
        $success = FALSE;
        $error_message = $exc->getMessage();
    }
} else {

    $id = urldecode(filter_input(INPUT_GET, "id"));
//URL for back link
    $url = urldecode(filter_input(INPUT_GET, "url"));

    $array = getPost($id);
}

if (empty($array)) {
    ?>
    <p>Post not available</p>
    <a href="<?= $url ?>">
        <i class="icon-arrow-left-2"></i> Back
    </a>
    <?php
} else {
    ?>
    <div>
        <h4>MODIFY POST</h4>
        <div class="row">
            <a href="<?= $url ?>">
                <i class="icon-arrow-left-2"></i> Back
            </a>
        </div>
        <div class="row">
            <?php
            if (isset($success)) {
                if ($success) {
                    ?>
                    <p class="fg-green">Update saved</p>
                <?php } else { ?>
                    <p class="fg-red"><?= $error_message ?></p>
                    <?php
                }
            }
            ?>
            <form method="post" action="index.php?p=12">
                <input name="url" hidden value="<?= $url ?>"/>
                <input name="id" hidden value="<?= $id ?>"/>
                <div class="row ntm">
                    <label class="span2">Title</label>
                    <div class="span10">
                        <input class="text" required name='title' value="<?= isset($array['title']) ? $array['title'] : "" ?>" maxlength="60" style="width: inherit" required type='text' tabindex='1' />
                    </div>
                </div>
                <?php
                if (empty($array['expire_time'])) {
                    $time = array(strftime("%Y-%m-%d", time() + (60 * 60 * 24)), //Current time + 1 day
                        "00:00:00");
                } else {
                    $time = explode(" ", $array['expire_time']);
                }
                ?>
                <div class="row" >
                    <label class="span2">Expire Date</label>
                    <div class="span10">
                        <div class="row ntm">
                            <!--old data-format="dddd, mmmm d, yyyy"-->
                            <div class="input-control text span3" data-role="datepicker"
                                 data-date="<?= $time[0] ?>"
                                 data-format="yyyy-mm-dd"
                                 data-position="bottom"
                                 data-effect="slide">
                                <input type="text" required name="exp_date">
                                <button type="button" class="btn-date"></button>
                            </div>
                            <div class="span7">
                                <div class="row ntm">
                                    <label class="span5">Expire Time <small>(hh:mm:ss)</small></label>
                                    <input class="span7" type="time" required="" placeholder="hh:mm:ss" value="<?= $time[1] ?>" name="exp_time">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <textarea class="ckeditor" name="content"><?= isset($array['content']) ? $array['content'] : "" ?></textarea>
                <div class="row ">
                    <div class="">
                        <input class="button bg-blue bg-hover-dark fg-white" name='post_edit_button' type='submit' tabindex='4' value="Update" />
                    </div>
                </div>

            </form>
        </div>
    </div>
    <?php
}?>