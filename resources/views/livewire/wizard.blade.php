<div>

    @if(!empty($successMessage))
        <div class="alert alert-success">
            {{ $successMessage }}
        </div>
    @endif

    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
{{--                                                                    {{ $currentStep!=1?"btn-default":"btn-primary" }}  --}}
                <a href="#step-1" type="button" class="btn btn-circle <?php if( $currentStep == 1 ){echo"btn-primary";}elseif(1 > $currentStep ){echo "btn-info";}elseif(1 < $currentStep){echo "btn-danger";}?>">1</a>
                <p>Step 1</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-circle <?php if(2 == $currentStep){echo"btn-primary";}elseif(2 > $currentStep ){echo "btn-info";}elseif(2 < $currentStep){echo "btn-danger";}?>">2</a>
                <p>Step 2</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-circle <?php if(3 == $currentStep){echo"btn-primary";}elseif(3 > $currentStep ){echo "btn-info";}elseif(3 < $currentStep){echo "btn-danger";}?>" disabled="disabled">3</a>
                <p>Step 3</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn btn-circle <?php if(4 == $currentStep){echo"btn-primary";}elseif(4 > $currentStep ){echo "btn-info";}elseif(4 < $currentStep){echo "btn-danger";}?>" disabled="disabled">4</a>
                <p>Step 4</p>
            </div>
        </div>

    </div>

    <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 1</h3>

                <div class="form-group">
                    <label for="title">Product Name:</label>
                    <input type="text" wire:model="name" class="form-control" id="taskTitle">
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="description">Product Amount:</label>
                    <input type="text" wire:model="amount" class="form-control" id="productAmount"/>
                    @error('amount') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="description">Product Description:</label>
                    <textarea type="text" wire:model="description" class="form-control" id="taskDescription">{{{ $description ?? '' }}}</textarea>
                    @error('description') <span class="error">{{ $message }}</span> @enderror
                </div>

                <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 2</h3>

                <div class="form-group">
                    <label for="description">Product Status</label><br/>
                    <label class="radio-inline"><input type="radio" wire:model="status" value="1" {{{ $status == '1' ? "checked" : "" }}}> Active</label>
                    <label class="radio-inline"><input type="radio" wire:model="status" value="0" {{{ $status == '0' ? "checked" : "" }}}> DeActive</label>
                    @error('status') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="description">Product Stock</label>
                    <input type="text" wire:model="stock" class="form-control" id="productAmount"/>
                    @error('stock') <span class="error">{{ $message }}</span> @enderror
                </div>

                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="secondStepSubmit">Next</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>
            </div>
        </div>
    </div>

{{--        --}}

        <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-2">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 3</h3>

                    <div class="form-group">
                        <label for="description">Product Stock</label>
                        <input type="text" wire:model="rate" class="form-control" id="productAmount"/>
                        @error('rate') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <select class="form-select" wire:model="quality">
                            <option value="bad">bad</option>
                            <option value="so bad">so bad</option>
                            <option value="good">good</option>
                            <option value="very good">very good</option>
                        </select>
                        {{$quality}}
                        @error('quality')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="thirdStepSubmit">Next</button>
                    <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
                </div>
            </div>
        </div>

        {{--        --}}

    <div class="row setup-content {{ $currentStep != 4 ? 'displayNone' : '' }}" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 3</h3>

                <table class="table">
                    <tr>
                        <td>Product Name:</td>
                        <td><strong>{{$name}}</strong></td>
                    </tr>
                    <tr>
                        <td>Product Amount:</td>
                        <td><strong>{{$amount}}</strong></td>
                    </tr>
                    <tr>
                        <td>Product status:</td>
                        <td><strong>{{$status ? 'Active' : 'DeActive'}}</strong></td>
                    </tr>
                    <tr>
                        <td>Product Description:</td>
                        <td><strong>{{$description}}</strong></td>
                    </tr>
                    <tr>
                        <td>Product Stock:</td>
                        <td><strong>{{$stock}}</strong></td>
                    </tr>
                    <tr>
                        <td>Product rate:</td>
                        <td><strong>{{$rate}}</strong></td>
                    </tr>
                    <tr>
                        <td>Product quality:</td>
                        <td><strong>{{$quality}}</strong></td>
                    </tr>

                </table>

                <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(3)">Back</button>
            </div>
        </div>
    </div>
</div>
