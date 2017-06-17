<?php include "header.php"; ?> 
  <div class="row">
    <div class="container">
    <div class="col-md-12 col-sm-12 text-center">
      <br><br><br><br><br>
    </div>
    <div class="col-md-8 col-sm-12">
    	<div class="panel panel-default">
  			<div class="panel-body">
    			<iframe width="700" height="550" src="<?php echo $url; ?>" frameborder="0" allowfullscreen></iframe>
  			</div>
		</div>
      <div class="panel panel-default">
        <div class="panel-body">
               <?php echo validation_errors(); ?>
               <?php echo form_open_multipart('komentar/komen'); ?>                
                <label>Kometar</label>
                <input type="text" class="form-control" name="komentar" required="">
              <br>
                <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
                </form>
        </div>
    </div>
      <div class="panel panel-default">
        <div class="panel-body">
          <label>List Komentar</label> <br>
          <?php 
          if (isset($komentar)) {
            foreach ($komentar as $data) : ?>
              <pre><?php  echo $data->pesan; ?><p align="right"><a href="<?php echo base_url() ?>index.php/komentar/edit/<?php  echo $data->id; ?>">Edit</a>|<a href="<?php echo base_url() ?>index.php/komentar/hapus/<?php  echo $data->id; ?>">Hapus</a></p></pre>
              <hr>
            <?php endforeach; 
          }else{
            echo "Kosong";
          }?>          
        </div>
    </div>
    </div>
    <div class="col-md-4 col-sm-12">
    	<div class="panel panel-default">
  			<div class="panel-body">
          <table>
            <tr>
              <td><a href="<?php echo base_url();?>index.php/main/show/1"><img src="<?php echo base_url();?>assets2/img/bootstrap.jpg" width="150" height="90" style="float : left">Bootstrap Tutorials</a></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
              <td><a href="<?php echo base_url();?>index.php/main/show/2"><img src="<?php echo base_url();?>assets2/img/php_vs_phython.jpg" width="150" height="90" style="float : left">PHP vs. Python in 2016</a></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
              <td><a href="<?php echo base_url();?>index.php/main/show/3"><img src="<?php echo base_url();?>assets2/img/top10.jpg" width="150" height="90" style="float : left">Top 10 Programming Languages of 2017</a></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
              <td><a href="<?php echo base_url();?>index.php/main/show/4"><img src="<?php echo base_url();?>assets2/img/CI.jpg" width="150" height="90" style="float : left">Tutorial codeigniter untuk pemula part 1</a></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
              <td><a href="<?php echo base_url();?>index.php/main/show/5"><img src="<?php echo base_url();?>assets2/img/CI2.jpg" width="150" height="90" style="float : left">Tutorial Codeigniter 3 - Memasukan Template</a></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
              <td><a href="<?php echo base_url();?>index.php/main/show/6"><img src="<?php echo base_url();?>assets2/img/install.jpg" width="150" height="90" style="float : left">Instal dan Templating CodeIgniter 3 Belajar CodeIgniter Part1</a></td>
            </tr>
          </table>
  			</div>
		</div>
    </div>
    <div class="col-md-12 col-sm-12">
      <br><br>
    </div>
    </div>
  </div>

	<?php include "footer.php"; ?>