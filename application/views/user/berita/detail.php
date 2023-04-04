<style>
.tag h4 {
    font-size: 15px;
    text-align: left;
    color: #646464;
}

.tag a {
    text-decoration: none;
}

.title h1 {
    font-size: 28px;
    text-align: left;
    color: #4A4A4A;
}

.berita .card-title a {
    text-align: left;
    color: #4A4A4A;
    font-size: 15px;
    text-decoration: none;
}

.berita .card-title a:hover {
    color: #FF4500;
    font-size: 15px;
}

.berita .card-text {
    text-align: left;
    color: #CFCFCF;
    font-size: 13px;
}

.date h5 {
    font-size: 12px;
    text-align: left;
    color: #CFCFCF;
}

.card-img-background {
    height: 400px;
    object-fit: cover;
}

.desc h5 {
    font-size: 16px;
    text-align: justify;
    text-justify: inter-character;
    color: #3d3d3d;
    line-height: 1.4;
}

.judul h3 {
    font-size: 20px;
    text-align: justify;
    text-justify: inter-character;
    color: #FF4500;
}

.desc h5 span {
    font-size: 17px;
    color: black;
}

.card-img-top {
    height: 200px;
    object-fit: cover;
}

.berita .terbaru {
    margin-top: 100px;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.berita .label {
    background-color: #ff8c00;
    padding: 1px 5px;
    position: absolute;
    top: 0;
    margin-top: 10px;
    right: 0;
    color: white;
}
</style>
<div class="container berita" style="margin-top:150px">
    <div class="row">
        <div class="col-8">
            <div class="tag">
                <h4><a href="<?= base_url('berita'); ?>">Berita</a> > <?=$detail->category?></h4>
            </div>
            <div class="title">
                <h1><?=$detail->title?></h1>
            </div><br>
            <div class="date">
                <h5><?=$detail->date?></h5>
            </div>

            <div class="card">
                <img class="card-img-background" src="<?=base_url('assets/img/berita/').$detail->photo?>"
                    alt="Card image">
            </div>
            <div class="desc mt-4">
                <h5><span>Jakarta, Palmerah -- </span><?=$detail->desc?></h5>
            </div>

        </div>
        <div class="col-3 terbaru">
            <div class="judul">
                <h3>TERUPDATE</h3>
                <hr>
            </div>
            <?php foreach ($berita as $v): ?>
            <div class="card mt-4">
                <img class="card-img-top" src="<?=base_url('assets/img/berita/').$v->photo?>" alt="Card image cap">
                <div class="card-body">
                    <span class="label"><?=$v->category?></span>
                    <h5 class="card-title">
                        <a href="<?=base_url("berita/detail/$v->id")?>"><?=substr($v->title,0,45)?>..</a>
                    </h5>
                    <p class="card-text"><small class="text-muted"><?=$v->date?></small></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>