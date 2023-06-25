<section class="flux">
    <div class="container">
        <h2 class="title">Liste des prestations</h2>
        <div class="col-12 p-2">
            <div class="col-md-6 col-sm-12 mb-4 category">
                <div class="row">
                    <div class="col-auto mb-4">
                        <h3 class="title">
                            <i class="fas fa-oil-can me-3"></i>
                            Vidange
                        </h3>
                        <h2>
                            <span id="adminVidange"></span>
                        </h2>
                        <script>
                            document.getElementById("adminVidange").innerHTML = localStorage.getItem("textvalue");
                        </script>
                    </div>
                </div>
</section>