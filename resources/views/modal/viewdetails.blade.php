<div class="modal fade" tabindex="-1" role="dialog" id="viewdetails-modal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                
                                        <div class="modal-header">
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Job Description</h4>
                                        </div>
                                        <div class="modal-body">
                                        <section class="row new-post">
                                            <div class="col-md-6 col-md-offset-3">
                                                <header><h3>What do you have to say?</h3></header>
                                                
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="banner_hash" id="new-banner" rows="5" placeholder="Banner Hash"></textarea>
                                                        <textarea class="form-control" name="banner_body" id="new-banner" rows="5" placeholder="Banner Body"></textarea>
                                                        <input class="form-control-file" type="file" name="banner_image" id="banner_image">
                                                    </div>
                                    
                                              
                                            </div>
                                        </section>
                                        </div>
                                        <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Create Banner</button>
                                                <input type="hidden" value="{{ Session::token() }}" name="_token">
                                        </div>
                                    
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        