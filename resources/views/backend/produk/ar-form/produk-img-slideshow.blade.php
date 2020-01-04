<div class="modal " id="ar-modal-img-slider"  role="dialog" aria-hidden="true" style="display: none;background-color: #000000a6">
    <div class="modal-dialog modal-lg" role="document" >
        <div class="modal-content" >
            <div class="modal-body">
                {{ csrf_field() }}
                <div id="imagesShowList"></div>
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
        				<div class="caption-container">
        					<p id="caption"></p>
        				</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
