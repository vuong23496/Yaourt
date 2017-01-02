@extends('layouts.master')
@section('content')
    <div id="body" class="contact">
        <div class="header">
            <div>
                <h1>Liên Hệ</h1>
            </div>
        </div>
        <div class="body">
            <div>
                <div>
                    <img src="images/check-in.png" alt="">
                    <h1>227 Nguyễn Văn Cừ, phường 4, Quận 5, Hồ Chí Minh</h1>
                    <p>nếu có nhu cầu đặt hàng xin liên hệ: 19001000 hoặc đến trực tiếp địa chỉ trê đê mua hàng</p>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="contact">
                <h1>GÓP Ý</h1>
                <form action="index.html">
                    <input type="text" name="Name" value="Name" onblur="this.value=!this.value?'Name':this.value;" onfocus="this.select()" onclick="this.value='';">
                    <input type="text" name="Email" value="Email" onblur="this.value=!this.value?'Email':this.value;" onfocus="this.select()" onclick="this.value='';">
                    <input type="text" name="Subject" value="Subject" onblur="this.value=!this.value?'Subject':this.value;" onfocus="this.select()" onclick="this.value='';">
                    <textarea name="meassage" cols="50" rows="7">chia sẻ những suy nghĩ của bạn</textarea>
                    <input type="submit" value="Send" id="submit">
                </form>
            </div>
            <div class="section">
                <h1>Chúng tối sẽ lắng nghe sự góp ý của bạn</h1>
                <p>ý kiến của bạn là chìa khóa cho sự thánh công của chúng tôi</p>
            </div>
        </div>
    </div>
@endsection()