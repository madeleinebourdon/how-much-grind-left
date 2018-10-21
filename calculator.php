<?php
include 'partials/header.php';
include 'partials/navbar.php';

function timeLeft() {
    $currentTimestamp = time();
    $targetTimestamp = strtotime('30 October 2018 01:00');

    $total = ($targetTimestamp - $currentTimestamp) / 60 / 60 / 24;
    $days = round($total);
    $hours = ($total - $days) * 24;
    $test = round($hours);
    $minutes = ($hours - $test) * 60;

    $hours = round($hours);
    $minutes = round($minutes);

    echo "There are <strong>" . $days. ' days, ' . $hours . ' hours and '  . $minutes . ' minutes</strong> left before the next reset.';
}
?>

<div class="container main">
    <div class="row">
        <div id="timer" class="col-xl-6">
            <h2>Ladder timer</h2>
            <?php timeLeft();
            ?>
            <p>The server is based on UTC time.</p>
        </div>
        <div id="prize" class="col-xl-6">
            <h2>Current prizes</h2>
            <p>The current highest prize is <strong>Guzma</strong>.</p>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                <img src="https://cdn.bulbagarden.net/upload/thumb/0/0c/GuzmaDarknessthatConsumesLight56.jpg/180px-GuzmaDarknessthatConsumesLight56.jpg" alt="Guzma full art">
                </div>
                <div class="col-xl-8 col-md-8 description align-middle">
                    <p>"Switch 1 of your opponent's Benched Pokémon with their Active Pokémon. If you do, switch your Active Pokémon with 1 of your Benched Pokémon."</p>
                    <p class="comment">You may play only 1 Supporter card during your turn (before your attack).</p>
                </div>
            </div>
            
        </div>
    </div>
    <div class="">
        <h2>Your ladder</h2>
        <label>Your number of points: </label><input id="points" type="number"> <span class="comment">(Values higher than 2000 will be ignored)</span><br>
        <label>Your streak: </label>
            <input type="radio" name="streak" id="streak0"><label for="streak0">0</label>
            <input type="radio" name="streak" id="streak1"><label for="streak1">1</label>
            <input type="radio" name="streak" id="streak2"><label for="streak2">2</label>
            <input type="radio" name="streak" id="streak3"><label for="streak3">3</label>
            <input type="radio" name="streak" id="streak4"><label for="streak4">4</label>
            <input type="radio" name="streak" id="streak5"><label for="streak5">5+</label>

        <p id="left">
            <script>
                pointsLeft();
            </script>
        </p>
        
        
    </div>
    
    

    
</div>

<?php
include 'partials/footer.php';
?>