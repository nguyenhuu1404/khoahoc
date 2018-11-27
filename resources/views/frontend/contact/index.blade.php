@extends('frontend.layouts.master')

@section('content')
	<section class="banner">
		<img src="images/banner-lesson.png">
		<div class="breadcrumb-position">
			<div class="container">
				<div class="title-breadcrumb">Học tiếng Nhật online</div>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
						<li class="breadcrumb-item active" aria-current="page">Contact</li>
					</ol>
				</nav>
			</div>
		</div>
	</section>
	<section class="contact-box my-5 w-100">
		<div class="container">
			<div class="row">						
				<div class="col-md-5 mb-5">
					<p>Vui lòng điền đầy đủ thông tin cần liên hệ. Lamsens sẽ cố gắng hồi đáp nhanh nhất yêu cầu của Quý khách hàng.</p>
					<p><strong>THỜI GIAN LÀM VIỆC:</strong></p>	
					<p>Từ thứ Hai đến thứ Bảy hàng tuần</p>
					<p>Sáng 8h00 - 12h00, Chiều 13h00 - 17h00</p>
					<p></p>
					<p></p>
					<p><strong>THỜI GIAN TIẾP NHẬN THÔNG TIN:</strong></p>	
					<p>Từ thứ Hai đến thứ Bảy hàng tuần</p>
					<p>Sáng 8h00 - 12h00, Chiều 13h00 - 17h00</p>
					<p></p>
					<p></p>
					<p><strong>THÔNG TIN LIÊN HỆ:</strong></p>	
					<p>Từ thứ Hai đến thứ Bảy hàng tuần</p>
					<p>Sáng 8h00 - 12h00, Chiều 13h00 - 17h00</p>
				</div>
				<div class="col-md-5 offset-md-2">
					<form action="" class="form-contact">
						<div class="form-group">
							<label>Tên của bạn (*)</label>
							<input type="text" class="form-control" id="name" required>
						</div>
						<div class="form-group">
							<label>Số điện thoại (*)</label>
							<input type="text" class="form-control" id="phone" required>
						</div>
						<div class="form-group">
							<label>Địa chỉ email (*)</label>
							<input type="text" class="form-control" id="email" required>
						</div>
						<div class="form-group">
							<label>Thông điệp</label>
							<textarea class="form-control" id="note" rows="3"></textarea>
						</div>

						<button class="btn btn-danger btn-submit-form font18 text-white" type="submit"><i class="fa fa-paper-plane-o mr-4" aria-hidden="true"></i> GỬI ĐI</button>
					</form>
				</div>						
				
			</div>
		</div>
	</section>

@endsection
@push('scripts')
<script>
    $('.cat-item a').click(function(){
    $(this).parent().toggleClass('opened');
})

</script>
@endpush

