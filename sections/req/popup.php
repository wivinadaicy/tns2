<!-- button untuk trigger -->
<button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#mediumModal" style = "float:right">INSERT</button>

<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">judul</h5>
            </div>
            <form action = "#" method="post">
                <div class="modal-body">
                    <div class = "form-group">
                        <label>lorem</label>
                        <input type = "text" required class = "form-control col-lg-12" placeholder="Nama Guru" name = "nama">
                    </div>
                    <div class = "form-group">
                        <label>lorem</label>
                        <input type = "email" required class = "form-control col-lg-12" placeholder="Email Guru" name = "email">
                    </div>
                    <div class = "form-group">
                        <label>lorem</label>
                        <input type = "number" required class = "form-control col-lg-12" placeholder="No HP Guru" name = "nohp">
                    </div>
                    <div class = "form-group">
                        <label>lorem</label>
                        <textarea class = "form-control col-lg-12" required name = "rumah" rows="5" placeholder="Alamat Rumah Guru"></textarea>
                    </div>
                    <div class = "form-group">
                        <label>lorem</label>
                        <select class = "form-control col-lg-12" name="jurusan">
                            <option value = "#">value</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>