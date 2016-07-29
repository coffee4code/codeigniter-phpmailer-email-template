<?php @ include dirname(__FILE__) . '/_inc/_header.inc.php' ?>
  <tr>
    <td align="center" valign="top" width="100%" style="background-color: #f7f7f7;" class="content-padding">
      <center>
        <table cellspacing="0" cellpadding="0" width="600" class="w320">
            <tr>
                <td class="header-md">
                    點名表
                    <br/>
                </td>
            </tr>
          <tr>
            <td>
                <span class="header-lg">
                    <?= $this->clazz['time']; ?>
                </span>
                <br/>
                <span class="header-md">
                    <?= $this->clazz['date']; ?>
                    <br/>
                </span>
            </td>
          </tr>
            <tr>
                <td class="free-text">
                    <a class="links-anchor" href="<?= $this->site . 'course/' . $this->clazz['courseid'] . '/' . urlencode($this->clazz['coursename']); ?>">
                        <?= $this->clazz['coursename']; ?>
                        <br/>
                        <br/>
                        <br/>
                    </a>
                </td>
            </tr>
          <tr>
            <td class="w320">
                <div class="medium-block" >
                    <center>
                        <table cellpadding="0" cellspacing="0" width="600" class="w320">
                            <tr>
                                <td colspan="2">
                                    <center>
                                        <table style="width: 100%; border-collapse: separate; border-spacing: 0 50px;">
                                            <tr>
                                                <td>
                                                    <img src="<?= $this->clazz['cover']; ?>" alt="" style="width: 200px;"/>
                                                </td>
                                            </tr>
                                        </table>
                                    </center>
                                    <br/>
                                    <br/>
                                </td>
                            </tr>
                            <tr>
                                <td class="title-dark">課程</td>
                                <td class="cell-bottom-line">
                                    <?= $this->clazz['coursename']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="title-dark">地點</td>
                                <td class="cell-bottom-line">
                                    <?= $this->clazz['address']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="title-dark">時間</td>
                                <td class="cell-bottom-line">
                                    <?= $this->clazz['date'] . ' ' .$this->clazz['time']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="padding: 30px 0;">
                                    <center>
                                        <table cellpadding="0" cellspacing="0" width=600" class="w320">
                                            <tr>
                                                <td class="title-dark" width="150">
                                                    序號
                                                </td>
                                                <td class="title-dark" width="150">
                                                    學生
                                                </td>
                                            </tr>
                                            <?php foreach($this->clazz['students'] as $index=>$student): ?>
                                                <tr>
                                                    <td style="text-align: left;">
                                                        <?= $index+1; ?>
                                                    </td>
                                                    <td style="text-align: left;">
                                                        <input id="input-<?= $index ?>" type="checkbox" />
                                                        <label for="input-<?= $index ?>" style="cursor: pointer;">
                                                            <?= $student; ?>
                                                        </label>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>
                                    </center>
                                </td>
                            </tr>

                        </table>
                    </center>
                </div>
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
<tr>
    <td align="center" valign="top" width="100%" style="background-color: #f7f7f7;" class="content-padding">
        <center>
            <table cellspacing="0" cellpadding="0" width="600" class="w320">
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
                            <a href="<?= $this->action['coursemanagement']; ?>" style="background-color:#E57373;border-radius:5px;color:#ffffff;display:inline-block;font-family:'Cabin', Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;line-height:45px;text-align:center;text-decoration:none;width:155px;-webkit-text-size-adjust:none;mso-hide:all;">
                                課程管理
                            </a>
                        </div>
                        <br/>
                        <br/>
                    </td>
                </tr>
                <tr>
                    <td class="links" style="text-align: center;background: #f7f7f7;">
                        <a href="<?= $this->action['addcourse']; ?>" class="links-anchor">創建新的課程課程</a>
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
