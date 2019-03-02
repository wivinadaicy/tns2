<div class="row">
    <div class="col-md-12 animate-box">
        <h2><?php $lang['judulform'];?> </h2>
        <form method="post" name="pesansubmit" id="pesansubmit" onsubmit="openmodal()">
            <div class="row form-group">
                <div class="col-md-2">
                    <label for="fname"><?php echo $lang['panggilan'];?></label> 
                    <select class = "form-control col-lg-12" name="gelar" id="gelar">
                        <option value = "Mr.">Mr.</option>
                        <option value = "Mrs.">Mrs.</option>
                        <option value = "Sir.">Sir.</option>
                        <option value = "Ms.">Ms.</option>
                        <option value = "Mx.">Mx.</option>
                        <option value = "Miss.">Miss.</option>
                        <option value = "Prof.">Prof.</option>
                        <option value = "Dr.">Dr.</option>
                        <option value = "H.E">H.E</option>
                    </select>
                </div>
                <div class="col-md-5">
                    <label for="fname"><?php echo $lang['fname'];?></label> 
                    <input type="text" id="fname" class="form-control" placeholder="Your firstname" name="namad" required>
                </div>
                <div class="col-md-5">
                    <label for="lname"><?php echo $lang['lname'];?></label> 
                    <input type="text" id="lname" class="form-control" placeholder="Your lastname" name="namab" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <label for="email"><?php echo $lang['email'];?></label> 
                    <input type="email" id="email" class="form-control" placeholder="Your email address" name="email" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <label for="subject"><?php echo $lang['phone'];?></label> 
                    <input type="phone" id="hp" class="form-control" placeholder="Your subject of this message" name="hp" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <label for="message"><?php echo $lang['pesan'];?></label> 
                    <textarea id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us" name="pesan" required></textarea>
                </div>
            </div>
            <div class="row form-group">
                <input type = "checkbox" name="setuju" value="setuju" required id="setuju"> <?php echo $lang['checkboxnya'];?> <a href ="#" data-toggle="modal" data-target="#mediumModal5" style = "color:darkred"><?php echo $lang['checka'];?></a>
            </div>
            <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary" name="kirim" id="kirim">
            </div>
        </form>		
    </div>
</div>


<div class="modal fade" id="mediumModals" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel"><?php echo $lang['kirimkah'];?></h5>
            </div>
            <form>
                <div class="modal-body" style = "font-size:15px">
                    <?php echo $lang['konfir'];?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" name="kirimkan" onclick="tolongsubmit()"><?php echo $lang['send'];?></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $lang['cancel'];?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function openmodal(){
    $(document).ready(function() {
                $('#mediumModals').modal("show");
            });
  }
</script>

<script>
    function tolongsubmit(){
        document.getElementById("pesansubmit").submit();
    }
</script>


<?php



if(isset($_POST['kirimkan'])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tns";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

            $stmt = $conn->prepare("INSERT INTO message (gelar, nama_depan, nama_belakang, email, telepon, pesan) VALUES (?, ?, ?, ?, ?, ?)");

            $stmt->bind_param("ssssss", $gelarnya, $namadnya, $namabnya, $emailnya, $hpnya, $pesannya);


            $gelarnya=$_POST['gelar'];
            $namadnya=$_POST['namad'];
            $namabnya=$_POST['namab'];
            $emailnya=$_POST['email'];
            $hpnya=$_POST['hp'];
            $pesannya=htmlspecialchars($_POST['pesan']);

            $stmt->execute();
    }     
?>











<div class="modal fade" id="mediumModal5" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel"><?php echo $lang['privacypolice'];?></h5>
            </div>
            <form action = "#" method="post">
                <div class="modal-body" style = "font-size:15px">
                    <h2 align="center"><?php echo $lang['datapp'];?></h2><br/>

<p style = "text-align:justify; text-align-last:left"><?php echo $lang['despp'];?></p>

<br/><h4><?php echo $lang['purptit'];?></h4>
<p style = "text-align:justify; text-align-last:left"><?php echo $lang['purp'];?></p>
<br/><h4><?php echo $lang['tittipedata'];?></h4>
<p style = "text-align:justify; text-align-last:left"><?php echo  $lang['tipedata'];?></p>
<br/><h4><?php echo $lang['legalgrtit'];?></h4>
<p style = "text-align:justify; text-align-last:left"><?php echo $lang['legalgr'];?></p>
<?php echo $lang['blabla'];?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $lang['close'];?></button>
                </div>
            </form>
        </div>
    </div>
</div>