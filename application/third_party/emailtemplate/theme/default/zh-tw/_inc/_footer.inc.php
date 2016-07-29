
<tr>
    <td style="background:repeat-x url(<?= $this->site . $this->background['grey']; ?>);">
        <div style="height: 10px;width: 100%;"></div>
    </td>
</tr>
<tr>
    <td align="center" valign="top" width="100%" style="background-color: #f7f7f7; height: 100px;">
        <center>
            <table cellspacing="0" cellpadding="0" width="600" class="w320">
                <tr>
                    <td style="padding: 25px 0 25px">
                        <a href="<?= $this->application['ios']['link'] ?>" target="_blank" style="text-align: center;">
                            <img src="<?= $this->site . $this->application['ios']['image'] ?>" alt="ios application download"/>
                        </a>
                    </td>
                    <td>
                        <a href="<?= $this->application['android']['link'] ?>" target="_blank" style="text-align: center;">
                            <img src="<?= $this->site . $this->application['android']['image'] ?>" alt="android application download"/>
                        </a>
                    </td>
                </tr>
            </table>
        </center>
    </td>
</tr>
<tr>
    <td align="center" valign="top" width="100%" style="background-color: #f7f7f7; height: 100px;">
        <center>
            <table cellspacing="0" cellpadding="0" width="600" class="w320">
                <tr>
                    <td style="padding: 25px 0 25px">
                        <strong><?= $this->team['name']; ?></strong>
                        <br />
                        <?= $this->team['contact']; ?>
                        <br />
                        <?= $this->team['email']; ?>
                        <br />
                        <?= $this->team['address']; ?>
                        <br />
                        <br />
                    </td>
                </tr>
            </table>
        </center>
    </td>
</tr>
</table>
</body>
</html>