<?php @ include dirname(__FILE__) . '/_inc/_header.inc.php' ?>
  <tr>
    <td align="center" valign="top" width="100%" style="background-color: #f7f7f7;" class="content-padding">
      <center>
        <table cellspacing="0" cellpadding="0" width="600" class="w320">
          <tr>
            <td class="header-lg">
                <br/>
                <?= $this->username; ?>，歡迎您！
            </td>
          </tr>
          <tr>
            <td class="free-text">
                感謝加入 Hobbees！讓我們為你導航！
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
                        <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="<?= $this->action['course']; ?>" style="height:45px;v-text-anchor:middle;width:155px;" arcsize="15%" strokecolor="#ffffff" fillcolor="#E57373">
                            <w:anchorlock/>
                            <center style="color:#ffffff;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;">課程</center>
                        </v:roundrect>
                        <![endif]-->
                        <a class="button-mobile" target="_blank" href="<?= $this->action['course']; ?>" style="background-color:#E57373;border-radius:5px;color:#ffffff;display:inline-block;font-family:'Cabin', Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;line-height:45px;text-align:center;text-decoration:none;width:155px;-webkit-text-size-adjust:none;mso-hide:all;">
                            課程
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="header-md">
                    來追逐你的熱情！凡事都係要試過，先會知自己鍾唔鍾意。

                </td>
            </tr>
            <tr>
                <td class="free-text">
                    簡易報課，選擇合適時間，通過 Email 就能處理付費與確認程序。
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                </td>
            </tr>
            <tr>
                <td class="button">
                    <div><!--[if mso]>
                        <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="<?= $this->action['event']; ?>" style="height:45px;v-text-anchor:middle;width:155px;" arcsize="15%" strokecolor="#ffffff" fillcolor="#E57373">
                            <w:anchorlock/>
                            <center style="color:#ffffff;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;">
                                活動
                            </center>
                        </v:roundrect>
                        <![endif]-->
                        <a class="button-mobile"  target="_blank" href="<?= $this->action['event']; ?>" style="background-color:#E57373;border-radius:5px;color:#ffffff;display:inline-block;font-family:'Cabin', Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;line-height:45px;text-align:center;text-decoration:none;width:155px;-webkit-text-size-adjust:none;mso-hide:all;">
                            活動
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="free-text">
                    發掘你的城市。我們為你網每個城中精采活動，為每個週末做好準備！
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                </td>
            </tr>
            <tr>
                <td class="button">
                    <div><!--[if mso]>
                        <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="<?= $this->action['blog']; ?>" style="height:45px;v-text-anchor:middle;width:155px;" arcsize="15%" strokecolor="#ffffff" fillcolor="#E57373">
                            <w:anchorlock/>
                            <center style="color:#ffffff;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;">
                                博客
                            </center>
                        </v:roundrect>
                        <![endif]-->
                        <a class="button-mobile" target="_blank" href="<?= $this->action['blog']; ?>" style="background-color:#E57373;border-radius:5px;color:#ffffff;display:inline-block;font-family:'Cabin', Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;line-height:45px;text-align:center;text-decoration:none;width:155px;-webkit-text-size-adjust:none;mso-hide:all;">
                            博客
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="free-text">
                    Hobbees 說故事。跟你分享城中大小事、人物專訪、與不同的生活風格。
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                </td>
            </tr>
            <tr>
                <td class="links" style="text-align: center">
                    <a href="<?= $this->site; ?>" class="links-anchor">立即 Hobbees</a>
                    |
                    <a href="<?= $this->action['upgrade']; ?>" class="links-anchor">成為導師</a>
                </td>
            </tr>

        </table>
      </center>
    </td>
  </tr>
<?php @ include dirname(__FILE__) . '/_inc/_footer.inc.php' ?>
