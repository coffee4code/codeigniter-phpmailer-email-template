<?php @ include dirname(__FILE__) . '/_inc/_header.inc.php' ?>
  <tr>
    <td align="center" valign="top" width="100%" style="background-color: #f7f7f7;" class="content-padding">
      <center>
        <table cellspacing="0" cellpadding="0" width="600" class="w320">

          <tr>
            <td class="header-lg">
                您已成功報讀
            </td>
          </tr>
            <tr>
                <td class="header-md">
                    <a class="links-anchor" href="<?= $this->site . 'course/' . $this->booking['courseid'] . '/' . urlencode($this->booking['coursename']); ?>">
                        <?= $this->booking['coursename']; ?>
                    </a>
                </td>
            </tr>
        </table>
      </center>
    </td>
  </tr>
  <tr>
    <td align="center" valign="top" width="100%" style="background-color: #f7f7f7;padding: 20px 0;">
        <div class="medium-block" >
            <center>
                <table cellpadding="0" cellspacing="0" width="600" class="w320">
                    <tr>
                        <td colspan="2">
                            <center>
                                <table style="width: 100%; border-collapse: separate; border-spacing: 0 50px;">
                                    <tr>
                                        <td>
                                            <img src="<?= $this->booking['cover']; ?>" alt="" style="width: 200px;"/>
                                        </td>
                                        <td>
                                            <img src="<?= $this->booking['qrcode']; ?>" alt="" style="width: 200px;"/>
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
                            <?= $this->booking['orderid']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="title-dark">地點</td>
                        <td class="cell-bottom-line">
                            <?= $this->booking['address']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="title-dark">導師</td>
                        <td class="cell-bottom-line">
                            <?= $this->booking['tutor']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center>
                                <table cellpadding="0" cellspacing="0" width=600" class="w320">
                                    <tr>
                                        <td style="padding: 30px 0;">
                                            <table cellspacing="0" cellpadding="0" width="100%">
                                                <tr>
                                                    <td class="title-dark" width="150">
                                                        日期
                                                    </td>
                                                    <td class="title-dark" width="150">
                                                        時間
                                                    </td>
                                                    <td class="title-dark" width="97">
                                                        座位數
                                                    </td>
                                                    <td class="title-dark" width="97">
                                                        價格
                                                    </td>
                                                </tr>


                                                <?php
                                                foreach($this->booking['schedule'] as $index=>$schedule):
                                                    ?>
                                                    <tr style="text-align: left;">
                                                        <td style="text-align: left;">
                                                            <?= $schedule['date'] ?>
                                                        </td>
                                                        <td style="text-align: left;">
                                                            <?= $schedule['time'] ?>
                                                        </td>
                                                        <td style="text-align: left;">
                                                            <?= $schedule['seat'] ?>
                                                        </td>
                                                        <td style="text-align: left;">
                                                            $<?= $schedule['price'] ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>


                                                <tr>
                                                    <td class="item-col item mobile-row-padding"></td>
                                                    <td class="item-col quantity"></td>
                                                    <td class="item-col price"></td>
                                                    <td class="item-col price"></td>
                                                </tr>


                                                <tr>
                                                    <td class="item-col item">
                                                    </td>
                                                    <td class="item-col item">
                                                    </td>
                                                    <td class="item-col quantity" style="text-align:right; padding-right: 10px; border-top: 1px solid #cccccc;">
                                                        <span class="total-space" style="font-weight: bold; color: #4d4d4d">Total</span>
                                                    </td>
                                                    <td class="item-col price" style="text-align: left; border-top: 1px solid #cccccc;">
                                                        <span class="total-space" style="font-weight:bold; color: #4d4d4d">$<?= $this->booking['total']; ?></span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </center>
                        </td>
                    </tr>
                </table>
            </center>
        </div>
    </td>
  </tr>
<tr>
    <td align="center" valign="top" width="100%" style="background-color: #f7f7f7;" class="content-padding">
        <center>
            <table cellspacing="0" cellpadding="0" width="600" class="w320">
                <tr>
                    <td class="button">
                        <div><!--[if mso]>
                            <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="<?= $this->site .'booking/'. $this->booking['courseid'] . '/bill/' . $this->booking['orderid']; ?>" style="height:45px;v-text-anchor:middle;width:155px;" arcsize="15%" strokecolor="#ffffff" fillcolor="#E57373">
                                <w:anchorlock/>
                                <center style="color:#ffffff;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;">
                                    管理課程
                                </center>
                            </v:roundrect>
                            <![endif]-->
                            <a href="<?= $this->site .'booking/'. $this->booking['courseid'] . '/bill/' . $this->booking['orderid']; ?>" style="background-color:#E57373;border-radius:5px;color:#ffffff;display:inline-block;font-family:'Cabin', Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;line-height:45px;text-align:center;text-decoration:none;width:155px;-webkit-text-size-adjust:none;mso-hide:all;">
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
