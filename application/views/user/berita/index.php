<style>
div .image-cont {}

.card-img-top {
    height: 250px;
    object-fit: cover;
}

.label {
    background-color: #ff8c00;
    padding: 5px 10px;
    position: absolute;
    top: 0;
    margin-top: 10px;
    left: 0;
    color: white;
}

.parent {

    position: relative;

    height: 250px;
    overflow: hidden;
    position: relative;
    float: left;
    display: inline-block;
    cursor: pointer;
    object-fit: cover;
}

.child {
    height: 100%;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    -webkit-transition: all .5s;
    -moz-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s;
}

.parent:hover .child,
.parent:focus .child {
    -ms-transform: scale(1.2);
    -moz-transform: scale(1.2);
    -webkit-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
}

.parent:hover .child:before,
.parent:focus .child:before {
    display: block;
}

.parent:hover a,
.parent:focus a {
    display: block;
}

.child:before {
    content: "";
    display: none;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
}

.news .card-title a {
    text-align: left;
    color: #4A4A4A;
    text-align: justify;
    text-justify: auto;
    text-decoration: none;
}

.news .card-title a:hover {
    color: #FF4500;
}

/* Media Queries */
@media screen and (max-width: 960px) {
    .parent {
        width: 100%;
        margin: 20px 0px;
    }
}
</style>

<div class="container" style="margin-top:150px">
    <div class="row">
        <?php foreach ($berita as $v): ?>
        <div class="col-4 mt-4">
            <div class="card">
                <div class="parent">
                    <a href="<?=base_url("berita/detail/$v->id")?>">
                        <div class="child">
                            <img class="card-img-top" src="<?=base_url('assets/img/berita/').$v->photo?>"
                                alt="Card image cap">
                        </div>
                    </a>
                    <div class="label"><?=$v->category?></div>
                </div>
                <div class="card-body news">
                    <h5 class="card-title">
                        <a href="<?=base_url("berita/detail/$v->id")?>"
                            style="text-decoration:none"><?=substr($v->title,0,55)?>..</a>
                    </h5>
                    <p class="card-text"><small class="text-muted"><?=$v->date?></small></p>
                    <p class="card-text"><?=substr($v->desc,0,130)?> <a href="<?=base_url("berita/detail/$v->id")?>"
                            style="text-decoration:none"> [...]</a>
                    </p>
                </div>
            </div>
        </div>

        <?php endforeach; ?>
    </div>
    <div class="parent" onclick="">
        <div class="child bg-one"></div>
    </div>
</div>