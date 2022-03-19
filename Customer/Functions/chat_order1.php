
                       
                            <label class="col-lg-2 control-label">ORDER Number</label>
                            <div class="col-lg-6">
                             




 <select name=""  class="form-control custom-select border-default col-sm-12" id="task_id" onClick="task(this)" required>
              <option value="" class="text-center"></option>
<?php 
                  //query for courses
                  $sqi="SELECT * FROM order_file Where email_address='$userid' and status='1'";
                  $record=mysqli_query($conn,$sqi);
                  
                  while ($row=mysqli_fetch_array($record,MYSQLI_BOTH))
                  {
                    $cat=$row["ID"];
                    $cat2=$row["order_id"];

                   
                     
                    echo "<option value=\"$cat\" class=\"text-center\">-- $cat2 --</option>";

                  }

                  ?>

                  ?>


    </select>
  <input type="hidden" id='show' name="task_id" />
  <script type="text/javascript">
    function task(thisObj)
{

  document.getElementById('show').value = thisObj.options[thisObj.selectedIndex].text;

}
  </script>
                            </div>
                        
                              
                             <button onclick="window.fcWidget1.open();window.fcWidget1.show();">Chat with us</button>
                          </div>
                    </div>
                   





         <script src="https://wchat.freshchat.com/js/widget.js"></script>
<script>
    var number = document.getElementById("show").value;
  
                                       window.fcWidget1.init({
                                       token: "dbe4cfff-f17e-4652-9fc1-16b6e4d974a6",
                                        host: "https://wchat.freshchat.com",
                                           restoreId: "Essayroom",
                                           siteId: "Essayroom",
                                           restoreId: number ? number : null,
            config: {
                disableEvents: true,
                 headerProperty: {
                 hideChatButton: true
                           }
                cssNames: {
                    widget: 'fc_frame',
                    open: 'fc_open',
                    expanded: 'fc_expanded'
                },
                showFAQOnOpen: true,
                hideFAQ: true,
                agent: {
                    hideName: false,
                    hidePic: false,
                    hideBio: false,
                },
                headerProperty: {
                    //If you have multiple sites you can use the appName and appLogo to overwrite the values.
                    appName: 'Essayroom',
                    backgroundColor: '#2DBF34',
                    foregroundColor: '#57F4E8 ',

                },
                content: {
                    placeholders: {
                        search_field: 'Search',
                        reply_field: 'Reply',
                        csat_reply: 'Add your comments here'
                    },
                }
            }
        });
    
 window.fcWidget.user.setProperties({
     externalId: number,     // user’s id unique to your system
     firstName: number,   // user’s first name
     lastName: '<?php echo $userid ;?>',
     externalId: number + '<?php echo $userid ;?>',
     restoreId: localStorage.getItem('freshchatrestoreId' + number),
    
 }); 
    
     
 </script>
                  </div>
                </div>
              </div>
            </div>