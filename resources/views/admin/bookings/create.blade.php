<div class="modal fade" id="save-rating">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Izoh qoldirish</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('ratings.store') }}" id="form">
                    @csrf
                    <div class="card-body">
                        <input type="hidden" name="booking_id" id="booking_id">
                        <div class="form-group">
                            <label for="comment">Izoh:</label>
                            <textarea name="comment" id="comment" class="form-control" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="rating">Baho:</label>
                            <input type="number" max="5" min="0" name="rating" id="rating" class="form-control" required>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal">Yopish
                        </button>
                        <button type="submit" class="btn btn-primary">Saqlash</button>
                    </div>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
