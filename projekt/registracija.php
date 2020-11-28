<!--Style za dodavanje clanka-->
<div class="card card-outline-secondary" style="margin:20px; width:90%">
    <div class="card-header">
        <h3 class="mb-0">Registracija novog korisnika</h3>
    </div>
    <div class="card-body">
        <form action="index.php?menu=10" method="POST" autocomplete="off" class="form" role="form">
            <div class="form-group">
                <label for="ime">Ime</label>
                <input class="form-control" name="ime" id="ime" placeholder="Ime" type="text">
            </div>
            <div class="form-group">
                <label for="prezime">Prezime</label>
                <input class="form-control" name="prezime" id="prezime" placeholder="Prezime" type="text">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" name="email" id="email" placeholder="Email" type="email">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" name="username" id="username" placeholder="Username" type="text">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" name="password" id="password" placeholder="Password" type="password">
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-lg float-right" type="submit">Pošalji</button>
            </div>
        </form>
    </div>
</div>