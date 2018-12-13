                    	</div>
                    
<!-- ---------- BUTTONS [Save] and [Delete] -->
<?php if ( $formMode == FormMode::CREATE ) { ?>
  <div class="panel-footer text-center">
  
    <button type="submit" formmethod="post" formaction="<?= $href->createCurrent() ?>" 
            class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Create</button>
            
    <div class="clearfix"></div>
  </div>
<?php } ?>
<?php if ( $formMode == FormMode::UPDATE ) { ?>
  <div class="panel-footer">
  
    <button type="submit" formmethod="post" formaction="<?= $href->deleteCurrent() ?>" 
            class="btn btn-danger pull-right" ><span class="glyphicon glyphicon-trash"
            ></span> Delete</button>
            
    <button type="submit" formmethod="post" formaction="<?= $href->updateCurrent() ?>" 
            class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"
            ></span> Save</button>
            
    <div class="clearfix"></div>
  </div>
<?php } ?>
                        
                    </div>
                </div>
	        </form>
       </div>
    </div>
</div>

<?php require ('view/layout/footer.php'); ?>
