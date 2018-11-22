<?php
$qGet2 = $mysqli->query('
        SELECT *
        FROM photos
        WHERE score>=1800
        ORDER BY score DESC
');
while ($dGet = $qGet2->fetch_object())
$rowsmax[] = $dGet;

$transdate = date('m-d-Y', time());
$month = date('m');

?>

<p style="left:200px;font-weight:bold;">Top 3 <?php echo $month?></p>
<div class="faces">
    <img src="<?php echo htmlspecialchars($rowsmax[0]->path); ?>" class="photos" alt="<?php echo htmlspecialchars($rowsmax[0]->name); ?>" data-token="<?php echo $rowsmax[0]->token; ?>" data-score="<?php echo $rowsmax[0]->score; ?>" width="150" height="200" />
    <ul>
        <li><?php echo htmlspecialchars($rowsmax[0]->name); ?></li>
        <li>Score: <?php echo number_format($rowsmax[0]->score, 0, ',', ' '); ?></li>
    </ul>
</div>
<div class="faces">
    <img src="<?php echo htmlspecialchars($rowsmax[1]->path); ?>" class="photos" alt="<?php echo htmlspecialchars($rowsmax[1]->path); ?>" data-token="<?php echo $rowsmax[1]->token; ?>" data-score="<?php echo $rowsmax[1]->score; ?>" width="150" height="200" />
    <ul>
        <li><?php echo htmlspecialchars($rowsmax[1]->name); ?></li>
        <li>Score: <?php echo number_format($rowsmax[1]->score, 0, ',', ' '); ?></li>
    </ul>
</div>
<div class="faces">
    <img src="<?php echo htmlspecialchars($rowsmax[2]->path); ?>" class="photos" alt="<?php echo htmlspecialchars($rowsmax[2]->path); ?>" data-token="<?php echo $rowsmax[2]->token; ?>" data-score="<?php echo $rowsmax[2]->score; ?>" width="150" height="200" />
    <ul>
        <li><?php echo htmlspecialchars($rowsmax[2]->name); ?></li>
        <li>Score: <?php echo number_format($rowsmax[2]->score, 0, ',', ' '); ?></li>
    </ul>
</div>
