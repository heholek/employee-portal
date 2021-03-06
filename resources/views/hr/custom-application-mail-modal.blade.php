<div class="modal fade hr_round_review" id="customApplicationMail" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="/hr/applications/{{ $application->id }}/sendmail" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="">Send mail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6 class="mb-4">Sending to: {{ $application->applicant->email }} </h6>
                    <div class="form-group">
                        <label for="mail_action">Action:</label>
                        <input type="text" class="form-control" id="mail_action" name="mail_action" required="required" placeholder="Action" value="">
                    </div>
                    <div class="form-group">
                        <label for="subject">Mail subject:</label>
                        <input type="text" class="form-control" id="subject" name="mail_subject" required="required" placeholder="Subject" value="">
                    </div>
                    <div class="form-group">
                        <label for="mail_content">Mail body:</label>
                        <textarea name="mail_body" id="mail_content" rows="10" class="richeditor form-control" placeholder="Body">

                        </textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
