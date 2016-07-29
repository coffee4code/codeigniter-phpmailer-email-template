<?php @ include dirname(__FILE__) . '/_inc/_header.inc.php' ?>
  <tr>
    <td align="center" valign="top" width="100%" style="background-color: #f7f7f7;" class="content-padding">
      <center>
        <table cellspacing="0" cellpadding="0" width="600" class="w320">
            <tr>
                <td class="header-md">
                    上課時間溫馨提示
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
                                                <td>
                                                    <img src="<?= $this->clazz['qrcode']; ?>" alt="" style="width: 200px;"/>
                                                </td>
                                            </tr>
                                        </table>
                                    </center>
                                    <br/>
                                    <br/>
                                </td>
                            </tr>
                            <tr>
                                <td class="title-dark">訂單號</td>
                                <td class="cell-bottom-line">
                                    <?= $this->clazz['orderid']; ?>
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
                                <td class="title-dark">導師</td>
                                <td class="cell-bottom-line">
                                    <?= $this->clazz['tutor']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="title-dark">座位數</td>
                                <td class="cell-bottom-line">
                                    <?= $this->clazz['seat']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="title-dark">時間</td>
                                <td class="cell-bottom-line">
                                    <?= $this->clazz['date'] . ' ' .$this->clazz['time']; ?>
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
                            <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="<?= $this->site .'booking/'. $this->clazz['courseid'] . '/bill/' . $this->clazz['orderid']; ?>" style="height:45px;v-text-anchor:middle;width:155px;" arcsize="15%" strokecolor="#ffffff" fillcolor="#E57373">
                                <w:anchorlock/>
                                <center style="color:#ffffff;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;">
                                    查看訂單
                                </center>
                            </v:roundrect>
                            <![endif]-->
                            <a href="<?= $this->site .'booking/'. $this->clazz['courseid'] . '/bill/' . $this->clazz['orderid']; ?>" style="background-color:#E57373;border-radius:5px;color:#ffffff;display:inline-block;font-family:'Cabin', Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;line-height:45px;text-align:center;text-decoration:none;width:155px;-webkit-text-size-adjust:none;mso-hide:all;">
                                查看訂單
                            </a>
                        </div>
                        <br/>
                        <br/>
                    </td>
                </tr>
                <tr>
                    <td class="links" style="text-align: center;background: #f7f7f7;">
                        <a href="<?= $this->action['course']; ?>" class="links-anchor">繼續報讀更多課程</a>
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
