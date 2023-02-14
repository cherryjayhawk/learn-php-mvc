
    

<div class="jumbotron">
    <h1>About Me</h1>
    <h4>Data from URL</h4>

    <img src="<?= BASEURL ?>/img/photo.png" style="border-radius: 50%; width: 200px; height: 200px; margin: 20px 0px;">

    <div class="input-group input-group-sm mb-3"">
        <div class="input-group-prepend">
            <span class="input-group-text"  style="width: 100px; border: none;" id="inputGroup-sizing-sm">Name</span>
        </div>
        <input type="text" disabled="disabled" style="max-width: 40vw; border: none;" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
        value=": <?= $data['name'] ?>"><br>
    </div>
    
    <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" style="width: 100px; border: none;" id="inputGroup-sizing-sm">Job</span>
        </div>
        <input type="text" disabled="disabled" style="max-width: 40vw; border: none;" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
        value=": <?= $data['job'] ?>"><br>
    </div>

    <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" style="width: 100px; border: none;" id="inputGroup-sizing-sm">Age</span>
        </div>
        <input type="text" disabled="disabled" style="max-width: 40vw; border: none;" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
        value=": <?= $data['age'] ?>"><br>
    </div>

    <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" style="width: 100px; border: none;" id="inputGroup-sizing-sm">Interest</span>
        </div>
        <input type="text" disabled="disabled" style="max-width: 40vw; border: none;" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
        value=": <?= $data['interest'] ?>"><br>
    
    </div>
</div>

    

   