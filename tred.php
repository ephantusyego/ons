<div class="container-fluid" style="margin: 0 auto; width: 50%">
            <div class='btn-group'>
            <button type='button' class='btn btn-default dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' style='background-color: #4076BC; color: #fff;'>
                Action<span class='caret'></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Edit</a></li>
                <li><a href="test.php?deleteUser" data-toggle="modal" data-target="#exampleModal">Delete</a></li>
            </ul>
        </div>
        </div>

<?php
            if (isset($_REQUEST["deleteUser"])) {
                echo '<div id="exampleModal" class="modal fade" tabindex="-1" role="dialog">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Modal title</h4>
                              </div>
                              <div class="modal-body">
                                <p>One fine body&hellip;</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                               </div>
                        </div>';
            }