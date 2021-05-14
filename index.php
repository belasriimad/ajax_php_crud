<?php include('includes/header.php');?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-info text-center">Contacts</h2>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search...">  
                    </div>
                    <div id="results">
                        <h4 id="result" class="text-primary text-center">
                        
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-3">
                <h3 class="text-info">Add new contact</h3>
                <div class="alert alert-success" style="display:none" id="alert-success"></div>
                    <form action="add.php" id="add-contact">
                        <div class="form-group">
                            <label for="nom">First Name*</label>
                            <input type="text" class="form-control" name="nom" id="nom" placeholder="First Name" required="">
                        </div>
                        <div class="form-group">
                            <label for="prenom">Last Name*</label>
                            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Last Name" required="">
                        </div>
                        <div class="form-group">
                            <label for="tel">Phone*</label>
                            <input type="text" class="form-control" name="tel" id="tel" placeholder="Phone" required="">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-3">
                <h3 class="text-info">Contacts</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody id="get-contacts">
                           
                        </tbody>
                    </table>    
                </div>
                <div class="col-md-3 col-md-offset-1">
                    <div id="view">
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php');?>