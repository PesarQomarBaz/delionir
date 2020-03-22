<?php require_once ("../home/header.php");?>


<div id="hacker-list">
    <ul class="list">
        <li>
            <h3 class="name">Jonny</h3>
            <p class="city">Stockholm</p>
        </li>
        <li>
            <h3 class="name">Jonas</h3>
            <p class="city">Berlin</p>
        </li>
    </ul>
</div>



<script src="list.min.js"></script>
<script>
    var options = {
        valueNames: [ 'name', 'city' ]
    };

    var hackerList = new List('hacker-list', options);
</script>
<?php require_once ("../home/footer.php");?>

