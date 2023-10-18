 <div class="container" style="background:#fff!important;">
     <?php
$lang=$this->config->item('question_lang');
?>

     <h3 class="page_heading"><?php echo $title;?></h3>



     <div class="row">
         <form method="post" id="qf" action="<?php echo site_url('qbank/new_question_4/'.$nop.'/'.$para);?>">

             <div class="col-md-8 shadow py-4">
                 <br>
                 <div class="login-panel panel panel-default">
                     <div class="panel-body">



                         <?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>



                         <div class="form-group">
                             <?php echo $this->lang->line('short_answer');?>

                         </div>


                         <div class="form-group">
                             <label><?php echo $this->lang->line('select_category');?></label>
                             <select class="form-control" name="cid">
                                 <?php 
					foreach($category_list as $key => $val){
						?>

                                 <option value="<?php echo $val['cid'];?>"><?php echo $val['category_name'];?></option>
                                 <?php 
					}
					?>
                             </select>
                         </div>


                         <div class="form-group">
                             <label><?php echo $this->lang->line('select_level');?></label>
                             <select class="form-control" name="lid">
                                 <?php 
					foreach($level_list as $key => $val){
						?>

                                 <option value="<?php echo $val['lid'];?>"><?php echo $val['level_name'];?></option>
                                 <?php 
					}
					?>
                             </select>
                         </div>
                     </div>
                 </div>
             </div>
     </div>
     <br> <br>

     <?php 
if($para==1){
?>

     <div class="col-lg-6 shadow py-4">
         <div class="form-group">
             <label for="inputEmail"><?php echo $this->lang->line('paragraph');?></label>
             <textarea name="paragraph" class="form-control"><?php
	if(isset($qp)){ echo $qp['paragraph']; } ?></textarea>
         </div>
     </div>

     <?php
} 
?>

     <div class="row">
         <br> <br>
     </div>
     <h3 class="page_heading">Question</h3>

     <div class="row shadow py-4">
         <div class="col-lg-6">
             <div class="form-group">
                 <label for="inputEmail"><?php echo $this->lang->line('question');?></label>
                 <textarea name="question" class="form-control"></textarea>
             </div>
         </div>
         <div class="col-lg-6">
             <div class="form-group">
                 <label for="inputEmail"><?php echo $this->lang->line('description');?></label>
                 <textarea name="description" class="form-control"></textarea>
             </div>
         </div>
     </div>
     <div class="row"><br><br></div>


     <h3 class="page_heading">Answer</h3>

     <div class="row shadow py-4">
         <div class="form-group">
             <label for="inputEmail"><?php echo $this->lang->line('answer_in_one_or_two_word');?>
             </label> <br>
             <input type="text" name="option[]" class="form-control" value="">
         </div>
     </div><br>








     <input type="hidden" name="parag" id="parag" value="0">
     <button class="btn btn-primary" type="submit"><?php echo $this->lang->line('submit');?></button>
     <?php 
if($para==1){
?> <button class="btn btn-primary" type="button"
         onClick="javascript:parag();"><?php echo $this->lang->line('submit&add');?></button>
     <?php } ?>


     </form>
 </div>







 </div>
 <script>
function parags() {
    $('#parag').val('1');
    $('#qf').submit();
}
 </script>