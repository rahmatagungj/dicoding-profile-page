<div class="card minus-top p-4 card-user" style="width: 350px;">
    <div class="card-body">
        <div class="user d-flex flex-column justify-content-center mx-auto align-items-center">
            <img class="card-user-picture rounded-circle" src="https://d17ivq9b7rppb3.cloudfront.net/small/avatar/202003182244424af48515d2ad646d30975e35dc5f982f.png" alt="Avatar" class="rounded-circle">
            <h5 class="mt-3">{{$user['name']}}</h5>
            <p class="mt-2">{{$user['headline']}}</p>
            <button class="mt-2 btn border " data-toggle="modal" data-target="#modalProfile">Edit Profile</button>
        </div>
    </div>
    <div class="bio mt-1">
        <p class="mt-2 d-flex flex-row align-items-center">

            <svg class="mr-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99996 4.66666C5.05444 4.66666 2.66663 7.05447 2.66663 9.99999C2.66663 12.9455 5.05444 15.3333 7.99996 15.3333C10.9455 15.3333 13.3333 12.9455 13.3333 9.99999C13.3333 7.05447 10.9455 4.66666 7.99996 4.66666ZM3.99996 9.99999C3.99996 7.79085 5.79082 5.99999 7.99996 5.99999C10.2091 5.99999 12 7.79085 12 9.99999C12 12.2091 10.2091 14 7.99996 14C5.79082 14 3.99996 12.2091 3.99996 9.99999Z" fill="#A1A1AA" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33333 1.33334H4V2.66668L4.96972 4.60611C5.69142 4.16334 6.48922 3.87379 7.33333 3.7732V1.33334ZM8.66667 3.7732C9.51079 3.87379 10.3086 4.16334 11.0303 4.60611L12 2.66668V1.33334H8.66667V3.7732Z" fill="#A1A1AA" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.6667 9.66666C10.6667 9.11437 10.219 8.66666 9.66671 8.66666H8.33337V11.3333H9.00004V10.6667H9.66671C10.219 10.6667 10.6667 10.2189 10.6667 9.66666ZM10 9.66666C10 9.85075 9.8508 9.99999 9.66671 9.99999H9.00004V9.33332H9.66671C9.8508 9.33332 10 9.48256 10 9.66666Z" fill="#A1A1AA" />
                <path d="M6.66671 10.3333L7.33337 11.3333H8.00004L7.08684 10.0046L8.00004 8.66666H7.33337L6.66671 9.66666L6.00004 8.66666H5.33337L6.24658 9.99532L5.33337 11.3333H6.00004L6.66671 10.3333Z" fill="#A1A1AA" />
            </svg>

            <label class="m-0" style="font-size: 14px;">{{$user['xp']}} XP</label>
        </p>
        <p class="mt-2 d-flex flex-row align-items-center">

            <svg class="mr-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.66671 4.66668C8.66671 4.29849 8.36823 4.00001 8.00004 4.00001C7.63185 4.00001 7.33337 4.29849 7.33337 4.66668V8.00001C7.33337 8.17682 7.40361 8.34639 7.52864 8.47141L9.86197 10.8047C10.1223 11.0651 10.5444 11.0651 10.8048 10.8047C11.0651 10.5444 11.0651 10.1223 10.8048 9.86194L8.66671 7.72387V4.66668Z" fill="#A1A1AA" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.00004 1.33334C4.31814 1.33334 1.33337 4.31811 1.33337 8.00001C1.33337 11.6819 4.31814 14.6667 8.00004 14.6667C11.6819 14.6667 14.6667 11.6819 14.6667 8.00001C14.6667 4.31811 11.6819 1.33334 8.00004 1.33334ZM2.66671 8.00001C2.66671 5.05449 5.05452 2.66668 8.00004 2.66668C10.9456 2.66668 13.3334 5.05449 13.3334 8.00001C13.3334 10.9455 10.9456 13.3333 8.00004 13.3333C5.05452 13.3333 2.66671 10.9455 2.66671 8.00001Z" fill="#A1A1AA" />
            </svg>

            <label class="m-0" style="font-size: 14px;">Bergabung Sejak {{$user['join_year']}}</label>
        </p>
        <p class="mt-2 d-flex flex-row align-items-center">

            <svg class="mr-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6381 3.02865C9.44477 0.8353 5.88865 0.8353 3.6953 3.02865C1.50196 5.22199 1.50196 8.77811 3.6953 10.9715L7.1953 14.4715C7.32033 14.5965 7.4899 14.6667 7.66671 14.6667C7.84352 14.6667 8.01309 14.5965 8.13811 14.4715L11.6381 10.9715C13.8315 8.77811 13.8315 5.22199 11.6381 3.02865ZM4.63811 3.97146C6.31076 2.29881 9.02266 2.29881 10.6953 3.97145C12.3679 5.6441 12.3679 8.356 10.6953 10.0286L7.66671 13.0572L4.63811 10.0286C2.96546 8.356 2.96546 5.6441 4.63811 3.97146Z" fill="#A1A1AA" />
                <ellipse cx="7.66667" cy="7.00001" rx="1.66667" ry="1.66667" fill="#A1A1AA" />
            </svg>


            <label class="m-0" style="font-size: 14px;">Kota {{$user['city']}}</label>
        </p>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalProfile" tabindex="-1" role="dialog" aria-labelledby="modalProfileLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalProfileLabel">Edit Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="validation-errors" id="validation-errors">,</div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">

                        <div class="row mb-4">
                            <div class="col-3">
                                <img class="modal-user-picture rounded" src="https://d17ivq9b7rppb3.cloudfront.net/small/avatar/202003182244424af48515d2ad646d30975e35dc5f982f.png" alt="Avatar" class="rounded-circle">
                            </div>
                            <div class="col">
                                <button class="btn bg-gray-100 text-gray-700">Upload</button>
                                <p class="text-gray-500 small mt-2">Gambar Profil Anda sebaiknya memiliki rasio 1:1<br /> dan berukuran tidak lebih dari 2MB.</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="control-label text-gray-700">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" placeholder="{{$user['name']}}" />
                            <span class="text-danger error-text name_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="username" class="control-label text-gray-700">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="{{$user['username']}}" />
                            <span class="text-danger error-text username_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label text-gray-700">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="{{$user['email']}}" />
                            <span class="text-danger error-text email_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="headline" class="control-label text-gray-700">Headline</label>
                            <input type="text" class="form-control" id="headline" placeholder="{{$user['headline']}}" />
                            <p class="text-gray-500 small mt-1">Dapat diisi dengan titel atau jabatan utama Anda.</p>
                            <span class="text-danger error-text headline_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="bio" class="control-label text-gray-700">Tentang Saya</label>
                            <textarea class="form-control" id="bio" rows="3" placeholder="{{$user['bio']}}"></textarea>
                            <p class="text-gray-500 small mt-1">Tulis cerita singkat tentang diri Anda.</p>
                            <span class="text-danger error-text bio_error"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark navy-500" id="profileModalSave">Simpan</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{csrf_token()}}"
            }
        });


        $('#profileModalSave').on("click", function(e) {
            e.preventDefault();

            const username = $('#username').val() || "{{$user['username']}}";
            const name = $('#name').val() || "{{$user['name']}}";
            const email = $('#email').val() || "{{$user['email']}}";
            const headline = $('#headline').val() || "{{$user['headline']}}";
            const bio = $('#bio').val() || "{{$user['bio']}}";

            $.ajax({
                url: "{{route('users.update',$user['username'])}}",
                type: "PUT",
                dataType: "JSON",
                data: {
                    name: name,
                    username: username,
                    email: email,
                    headline: headline,
                    bio: bio
                },
                beforeSend: function() {
                    $(document).find('span.error-text').text('');
                },
                success: function(data) {
                    $('#modalProfile').modal('hide');
                    window.location.href = `/users/` + data.username;
                },
                error: function(data) {
                    $.each(data.responseJSON.errors, function(prefix, val) {
                        $('span.' + prefix + '_error').text(val[0]);
                    });
                }
            });
        });
    });
</script>