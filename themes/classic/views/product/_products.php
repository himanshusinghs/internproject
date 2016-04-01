
      <?php
        foreach ($products as $product) {
      ?>
      <div class="well w3-card-12 w3-animate-opacity">
          <div class="media">
              <div class="media-left media-middle">
                  <a href="<?php echo Yii::app()->createUrl('/product/productprofile/',array('id'=>$product->id))?>">
                       <img class="media-object img-thumbnail" src=<?php echo Yii::app()->request->baseUrl.'/themes/product_logo/'.$product->logo.'.png'; ?> alt="Pic">
                  </a>
              </div>
              <div class="media-body">
                  <div class="col-sm-12 col-md-8 ">
                    <h2>
                        <?php 
                            if($product->under_ppc==0)
                            {
                              echo CHtml::link($product->name,array('product/productprofile/','id'=>$product->id),array('class' => ''));
                            }
                            else
                            {
                              echo CHtml::link($product->name,$product->product_website,array('class' => ''));
                            }
                         ?>
                    </h2>     
                      <h4>
                          <small>
                               by <?php echo $product->company_name ?>
                          </small>
                      </h4>
                      
                  </div>
                  <div>
                      <?php 
                          if($product->under_ppc==0)
                          {
                            echo CHtml::link('Visit Profile',array('product/productprofile/',
                              'id'=>$product->id),array('class' => 'btn btn-primary','type'=>'button'));
                          }
                          else
                          {
                            echo CHtml::link('Visit Website',$product->product_website,array('class' => 'btn btn-primary','type'=>'button'));
                          }
                       ?>
                  </div>
                  <div class="col-sm-12">

                      <p class="small">
                                <?php echo $product->description ?>
                                <a class="lnk" href="<?php echo Yii::app()->createUrl('/product/productprofile/',array('id'=>$product->id))?>">View Profile</a>
                      </p>
                  </div>
              </div>

          </div>

      </div>
      <?php  } ?>




