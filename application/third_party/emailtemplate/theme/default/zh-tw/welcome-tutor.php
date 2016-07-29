<?php @ include dirname(__FILE__) . '/_inc/_header.inc.php' ?>
    <tr>
        <td align="center" valign="top" width="100%" style="background-color: #f7f7f7;" class="content-padding">
            <center>
                <table cellspacing="0" cellpadding="0" width="600" class="w320">
                    <tr>
                        <td class="header-lg">
                            <br/>
                            <?= $this->username; ?>，你好！
                        </td>
                    </tr>
                    <tr>
                        <td class="free-text">
                            謝謝你成為 Hobbees 的導師！讓我們助你啟航！
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                        </td>
                    </tr>
                    <tr>
                        <td class="button">
                            <div><!--[if mso]>
                                <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="<?= $this->action['profile']; ?>" style="height:45px;v-text-anchor:middle;width:155px;" arcsize="15%" strokecolor="#ffffff" fillcolor="#E57373">
                                    <w:anchorlock/>
                                    <center style="color:#ffffff;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;">個人資料</center>
                                </v:roundrect>
                                <![endif]-->
                                <a class="button-mobile"  target="_blank" href="<?= $this->action['profile']; ?>" style="background-color:#E57373;border-radius:5px;color:#ffffff;display:inline-block;font-family:'Cabin', Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;line-height:45px;text-align:center;text-decoration:none;width:155px;-webkit-text-size-adjust:none;mso-hide:all;">
                                    個人資料
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="header-md">
                            請確定你已完成提交資訊步驟，包括銀行資料；確保我們能處理你的課金。
                        </td>
                    </tr>
                    <tr>
                        <td class="free-text">
                            我們會認真處理你的個人資訊，確保資料保密。
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                        </td>
                    </tr>
                    <tr>
                        <td class="button">
                            <div><!--[if mso]>
                                <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word"  href="<?= $this->action['course']; ?>" style="height:45px;v-text-anchor:middle;width:155px;" arcsize="15%" strokecolor="#ffffff" fillcolor="#E57373">
                                    <w:anchorlock/>
                                    <center style="color:#ffffff;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;">
                                        課程
                                    </center>
                                </v:roundrect>
                                <![endif]-->
                                <a class="button-mobile" target="_blank" href="<?= $this->action['course']; ?>" style="background-color:#E57373;border-radius:5px;color:#ffffff;display:inline-block;font-family:'Cabin', Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;line-height:45px;text-align:center;text-decoration:none;width:155px;-webkit-text-size-adjust:none;mso-hide:all;">
                                    課程
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="free-text">
                            你的課程將在 Hobbees 的平台上刊登，讓更多感興趣的人跟導師連結。
                            <br/>
                            詳盡資訊、介紹、與高質素相片是瀏覽率的關鍵！
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                        </td>
                    </tr>
                    <tr>
                        <td class="button">
                            <div><!--[if mso]>
                                <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="<?= $this->action['coursemanagement']; ?>" style="height:45px;v-text-anchor:middle;width:155px;" arcsize="15%" strokecolor="#ffffff" fillcolor="#E57373">
                                    <w:anchorlock/>
                                    <center style="color:#ffffff;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;">
                                        課程管理
                                    </center>
                                </v:roundrect>
                                <![endif]-->
                                <a class="button-mobile" target="_blank" href="<?= $this->action['coursemanagement']; ?>" style="background-color:#E57373;border-radius:5px;color:#ffffff;display:inline-block;font-family:'Cabin', Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;line-height:45px;text-align:center;text-decoration:none;width:155px;-webkit-text-size-adjust:none;mso-hide:all;">
                                    課程管理
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="free-text">
                            管理平台讓導師統制課程資訊。
                            <br/>
                            鍵入日曆，是日收生，一目了然。
                            <br/>
                            課程管理和交易記錄設於頁面之頂部。
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                        </td>
                    </tr>

                    <tr>
                        <td class="links" style="text-align: center">
                            <a href="<?= $this->action['dashboard']; ?>" class="links-anchor">檢視管理頁面</a>
                        </td>
                    </tr>
                </table>
            </center>
        </td>
    </tr>
<?php @ include dirname(__FILE__) . '/_inc/_footer.inc.php' ?>
