<div class="container">
	<div class="row">
        <div id="register-form" class="col-lg-6 col-lg-offset-3">
            <div class="row">
            	<button title="Close (Esc)" type="button" class="mfp-close">X</button>

                <div class="col-lg-12">
                	<h2 class="uppercase">register</h2>
                </div>
                     <div class="control-group">
                        <div class="controls ">
                            <label for="type">SELECT CONTEST CATEGORY</label><br>
                            <select name="category" id="category">
                                <option value="" disabled selected="selected">Select type</option>
                                <option value="debate">Debate</option>
                                <option value="newscast">News Casting</option>
																<option value="storytelling">Story Telling</option>
                                <option value="speech">Speech</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 text-right">
                      <button class="button button-big button-dark" onclick="form_send()">SEND</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
