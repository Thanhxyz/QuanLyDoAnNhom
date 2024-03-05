<!DOCTYPE html>
<html>
    <head>
        <title>Trang Quản Lý Sinh Viên</title>
        <meta charset="utf-8">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <style>
        h2 {
        margin-left: 50px;
    }
    p {
        margin-left: 50px;
    }
    ul {
        margin-left: 50px;
    }
    </style>
    <body>
        <div class="header">
            Học Viện Hàng Không Việt Nam
        </div>

        <div class="sidebar">
            <ul>
            <li><a href="{{ url('student-management') }}">TRANG CHỦ</a></li>
                <li><a href="{{ url('lops') }}">QUẢN LÝ LỚP HỌC</a></li>
                <li><a href="{{ url('giaovien') }}">QUẢN LÝ GIẢNG VIÊN</a></li>
                <li><a href="{{ url('quanlykhoa') }}">QUẢN LÝ KHOA</a></li>
                <li><a href="{{ url('quanlysinhvien') }}">QUẢN LÝ SINH VIÊN</a></li>
                <li><a href="{{ url('quanlydiem') }}">QUẢN LÝ ĐIỂM RÈN LUYỆN</a></li>
                <li><a href="{{ url('accounts') }}">QUẢN LÝ TÀI KHOẢN</a></li>
                <li><a href="{{ route('logout') }}" class="logout-button">Đăng xuất</a></li>
            </ul>
        </div>
        <div class="main">
            <!-- Nội dung chính của trang web sẽ được đặt ở đây -->
            <img src="{{ asset('https://scontent.fsgn5-8.fna.fbcdn.net/v/t39.30808-6/400020668_878528077052018_1773920352314150590_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=524774&_nc_eui2=AeGgIWJeMmnZPXNFVZFBD_8RdT4M574Env91PgznvgSe_6bdQFcwHgSLwFsh4pABGjrc6mf5SAIlNasW4vcLWClu&_nc_ohc=0cMZhcz6Md8AX-X962V&_nc_ht=scontent.fsgn5-8.fna&oh=00_AfCZz8HZZ4g2Mqc6ur0cTo1J2pqr7OAte0tV62SWHw2HNQ&oe=65E8963F') }}" alt="học viện hàng không" width="1678" height="400">
            <h2>Sứ mạng</h2>
            <p>Học viện Hàng không Việt Nam thực hiện sứ mạng đào tạo nguồn nhân lực chất lượng cao; nghiên cứu khoa học, tư vấn và chuyển giao công nghệ ngành hàng không và các ngành kinh tế kỹ thuật khác đạt tiêu chuẩn quốc tế cho Việt Nam và các nước trong khu vực.</p>

            <h2>Tầm nhìn</h2>
            <p>Trở thành cơ sở đào tạo, nghiên cứu khoa học và chuyển giao công nghệ ngành hàng không và các ngành kinh tế khác có uy tín trong nước và quốc tế.</p>

            <h2>Giá trị cốt lõi</h2>
            <ul>
                <li>Chất lượng và hiệu quả: Đào tạo nguồn nhân lực chất lượng cao, sử dụng nguồn lực hiệu quả nhất;</li>
                <li>Độc lập và sáng tạo: Đào tạo người học tư duy độc lập và sáng tạo;</li>
                <li>Toàn diện và hội nhập: Đào tạo con người phát triển toàn diện, sẵn sàng hội nhập xã hội, hội nhập quốc tế.</li>
            </ul>

            <h2>Triết lý giáo dục</h2>
            <p>Triết lý giáo dục của Học viện Hàng không Việt Nam là:</p>
            <p>“Chất lượng - Sáng tạo - Hội nhập”</p>
            <p>Triết lý giáo dục là tư tưởng chỉ đạo, xuyên suốt làm định hướng phát triển cho Học viện. Học viện Hàng không Việt Nam hướng đến mục tiêu đào tạo nguồn nhân lực chất lượng cao, thành thục kỹ năng nghề nghiệp, tư duy độc lập sáng tạo và hội nhập quốc tế.</p>
        </div>
    </body>
</html>
