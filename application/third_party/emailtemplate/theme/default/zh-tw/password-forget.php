<?php @ include dirname(__FILE__) . '/_inc/_header.inc.php' ?>
  <tr>
    <td align="center" valign="top" width="100%" style="background-color: #f7f7f7;" class="content-padding">
      <center>
        <table cellspacing="0" cellpadding="0" width="600" class="w320">
          <tr>
            <td class="header-lg">
                <br/>
                <br/>
                <br/>
                <?= $this->username; ?>，您好！
            </td>
          </tr>
          <tr>
            <td class="free-text">
                您在<?= $this->datetime; ?>提交了密碼找回請求
                <br/>
                <br/>
                <br/>
            </td>
          </tr>
            <tr>
                <td class="button">
                    <div><!--[if mso]>
                        <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="<?= $this->link; ?>" style="height:45px;v-text-anchor:middle;width:155px;" arcsize="15%" strokecolor="#ffffff" fillcolor="#E57373">
                            <w:anchorlock/>
                            <center style="color:#ffffff;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;">重置密碼</center>
                        </v:roundrect>
                        <![endif]-->
                        <a class="button-mobile" target="_blank" href="<?= $this->link; ?>" style="background-color:#E57373;border-radius:5px;color:#ffffff;display:inline-block;font-family:'Cabin', Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;line-height:45px;text-align:center;text-decoration:none;width:155px;-webkit-text-size-adjust:none;mso-hide:all;">
                            重置密碼
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="free-text">
                    (如果不是您本人操作，請忽略本郵件)
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                </td>
            </tr>
            <tr>
                <td class="links" style="text-align: center">
                    <a href="<?= $this->site; ?>" class="links-anchor">回到Hobbees</a>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                </td>
            </tr>

        </table>
      </center>
    </td>
  </tr>
<?php @ include dirname(__FILE__) . '/_inc/_footer.inc.php' ?>
