<?php
$qGet = $mysqli->query('
        SELECT token, name, path, score
        FROM photos
        ORDER BY RAND()
        LIMIT 2');
while ($dGet = $qGet->fetch_object())
    $rows[] = $dGet;
?>
<<<<<<< HEAD
=======

<?php
>>>>>>> a669b7eca40c82569dd244a63cea97403672486b
/*$qGet2 = $mysqli->query('
        SELECT *
        FROM photos
        WHERE score>=1500
        ORDER BY score DESC
        ');
while ($dGet = $qGet2->fetch_object())
    $rowsmax[] = $dGet;*/
<<<<<<< HEAD

=======
?>
>>>>>>> a669b7eca40c82569dd244a63cea97403672486b

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

<<<<<<< HEAD
<!--
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
</div>-->
=======

>>>>>>> a669b7eca40c82569dd244a63cea97403672486b
