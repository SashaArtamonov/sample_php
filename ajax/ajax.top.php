<?php
<<<<<<< HEAD
$qGet = $mysqli->query('
        SELECT token, name, path, score
        FROM photos
        ORDER BY RAND()
        LIMIT 2');
while ($dGet = $qGet->fetch_object())
    $rows[] = $dGet;

=======
>>>>>>> fa1ac17b9c8868810daad80d0fd51d8ce61d9d54
$qGet2 = $mysqli->query('
        SELECT *
        FROM photos
        WHERE score>=1500
        ORDER BY score DESC
        ');
<<<<<<< HEAD
while ($dGet2 = $qGet2->fetch_object())
    $rowsmax[] = $dGet2;
?>


<div class="faces">
    <img src="<?php echo htmlspecialchars($rows[0]->path); ?>" class="photos" alt="<?php echo htmlspecialchars($rows[0]->name); ?>" data-token="<?php echo $rows[0]->token; ?>" data-score="<?php echo $rows[0]->score; ?>" width="266" height="400" />
    <ul>
        <li><?php echo htmlspecialchars($rows[0]->name); ?></li>
        <li>Score: <?php echo number_format($rows[0]->score, 0, ',', ' '); ?></li>
    </ul>
</div>
<p id="middle">OR</p>
<img src="loader.gif" alt="Chargement..." width="64" height="64" id="loader" />
<div class="faces">
    <img src="<?php echo htmlspecialchars($rows[1]->path); ?>" class="photos" alt="<?php echo htmlspecialchars($rows[1]->path); ?>" data-token="<?php echo $rows[1]->token; ?>" data-score="<?php echo $rows[1]->score; ?>" width="266" height="400" />
    <ul>
        <li><?php echo htmlspecialchars($rows[1]->name); ?></li>
        <li>Score: <?php echo number_format($rows[1]->score, 0, ',', ' '); ?></li>
    </ul>
</div>

=======
while ($dGet = $qGet2->fetch_object())
    $rowsmax[] = $dGet;
?>

>>>>>>> fa1ac17b9c8868810daad80d0fd51d8ce61d9d54
<p style="left:200px;font-weight:bold;">Top 3 November</p>
<div class="topfaces">
    <img src="<?php echo htmlspecialchars($rowsmax[0]->path); ?>" class="topphotos" alt="<?php echo htmlspecialchars($rowsmax[0]->name); ?>" data-token="<?php echo $rowsmax[0]->token; ?>" data-score="<?php echo $rowsmax[0]->score; ?>" width="150" height="200" />
    <ul>
        <li><?php echo htmlspecialchars($rowsmax[0]->name); ?></li>
        <li>Score: <?php echo number_format($rowsmax[0]->score, 0, ',', ' '); ?></li>
    </ul>
</div>
<div class="topfaces">
    <img src="<?php echo htmlspecialchars($rowsmax[1]->path); ?>" class="topphotos" alt="<?php echo htmlspecialchars($rowsmax[1]->path); ?>" data-token="<?php echo $rowsmax[1]->token; ?>" data-score="<?php echo $rowsmax[1]->score; ?>" width="150" height="200" />
    <ul>
        <li><?php echo htmlspecialchars($rowsmax[1]->name); ?></li>
        <li>Score: <?php echo number_format($rowsmax[1]->score, 0, ',', ' '); ?></li>
    </ul>
</div>
<div class="topfaces">
    <img src="<?php echo htmlspecialchars($rowsmax[2]->path); ?>" class="topphotos" alt="<?php echo htmlspecialchars($rowsmax[2]->name); ?>" data-token="<?php echo $rowsmax[2]->token; ?>" data-score="<?php echo $rowsmax[2]->score; ?>" width="150" height="200" />
    <ul>
        <li><?php echo htmlspecialchars($rowsmax[2]->name); ?></li>
        <li>Score: <?php echo number_format($rowsmax[2]->score, 0, ',', ' '); ?></li>
    </ul>
</div>