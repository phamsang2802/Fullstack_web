<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('san_phams')->delete();

        DB::table('san_phams')->truncate();

        DB::table('san_phams')->insert([
            [
                'ten_san_pham' => 'Iphone 13' ,
                'slug_san_pham' => 'iphone-13' ,
                'so_luong' => 10,
                'gia_ban' => 33990000,
                'gia_khuyen_mai' => 31690000,
                'hinh_anh' => 'https://galaxydidong.vn/wp-content/uploads/2021/10/iphone-13-pro-max-gold-1-600x600.jpg',
                'mo_ta_ngan' => 'Đa dạng sự lựa chọn với 6 màu thanh lịch
                                Bắt trọng khung ảnh Camera kép siêu rộng
                                An toàn khi sử dụng khả năng chống nước
                                Mượt mà, nhanh chóng với Chip Apple A13 Bionic',
                'mo_ta_chi_tiet' => 'Đa dạng sự lựa chọn với 6 màu thanh lịch
                                    Bắt trọng khung ảnh Camera kép siêu rộng
                                    An toàn khi sử dụng khả năng chống nước
                                    Mượt mà, nhanh chóng với Chip Apple A13 Bionic',
                'id_loai_san_pham' => 6,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Iphone 11 64GB' ,
                'slug_san_pham' => 'iphone-11-64gb' ,
                'so_luong' => 10,
                'gia_ban' => 16990000,
                'gia_khuyen_mai' => 14490000,
                'hinh_anh' => 'https://galaxydidong.vn/wp-content/uploads/2019/12/iPhone-11-pro-600x600.jpg',
                'mo_ta_ngan' => 'Nâng cao chất lượng ảnh với hệ thống camera được nâng cấp.
                                Chơi game 3D mượt mà với chip A15 Bionic, GPU 5 lõi mới.
                                Trải nghiệm quét 120 Hz, độ sáng 1200 nits.
                                Thao tác cảm ứng thông minh ProMotion và hệ điều hành iOS 15 mới',
                'mo_ta_chi_tiet' => 'Nâng cao chất lượng ảnh với hệ thống camera được nâng cấp.
                                    Chơi game 3D mượt mà với chip A15 Bionic, GPU 5 lõi mới.
                                    Trải nghiệm quét 120 Hz, độ sáng 1200 nits.
                                    Thao tác cảm ứng thông minh ProMotion và hệ điều hành iOS 15 mới',
                'id_loai_san_pham' => 6,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Iphone 12 Pro 128gb',
                'slug_san_pham' => 'iphone-12-128gb',
                'so_luong' => 10,
                'gia_ban' => 30490000,
                'gia_khuyen_mai' => 26990000,
                'hinh_anh' => 'https://www.xtmobile.vn/vnt_upload/product/11_2020/thumbs/600_iphone_12_xanh_la_xtmobile.jpg',
                'mo_ta_ngan' => 'Nâng cao chất lượng ảnh với hệ thống camera được nâng cấp.
                                Chơi game 3D mượt mà với chip A15 Bionic, GPU 5 lõi mới.
                                Trải nghiệm quét 120 Hz, độ sáng 1200 nits.
                                Thao tác cảm ứng thông minh ProMotion và hệ điều hành iOS 15 mới',
                'mo_ta_chi_tiet' => 'Nâng cao chất lượng ảnh với hệ thống camera được nâng cấp.
                                    Chơi game 3D mượt mà với chip A15 Bionic, GPU 5 lõi mới.
                                    Trải nghiệm quét 120 Hz, độ sáng 1200 nits.
                                    Thao tác cảm ứng thông minh ProMotion và hệ điều hành iOS 15 mới',
                'id_loai_san_pham' => 6,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Asus TUF Gaming FX517ZC' ,
                'slug_san_pham' => 'asus-tuf-gaming-fx517zc' ,
                'so_luong' => 10,
                'gia_ban' => 33990000,
                'gia_khuyen_mai' => 33690000,
                'hinh_anh' => 'https://anphat.com.vn/media/product/41155_laptop_asus_tuf_dash_f15_fx517zc_hn079w.jpg',
                'mo_ta_ngan' => 'Sở hữu ngoại hình ấn tượng thu hút mọi ánh nhìn
                                cùng hiệu năng mạnh mẽ đến từ laptop CPU thế hệ 12
                                mới nhất, Asus TUF Gaming FX517ZC i5 12450H (HN077W)
                                là lựa chọn xứng tầm cho mọi nhu cầu chiến game giải
                                trí hay đồ hoạ - kỹ thuật của người dùng.',
                'mo_ta_chi_tiet' => 'Sở hữu ngoại hình ấn tượng thu hút mọi ánh nhìn
                                    cùng hiệu năng mạnh mẽ đến từ laptop CPU thế hệ 12
                                    mới nhất, Asus TUF Gaming FX517ZC i5 12450H (HN077W)
                                    là lựa chọn xứng tầm cho mọi nhu cầu chiến game giải
                                    trí hay đồ hoạ - kỹ thuật của người dùng.',
                'id_loai_san_pham' => 8,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Laptop Asus VivoBook A415EA i3 1125G4/8GB/512GB/Win11' ,
                'slug_san_pham' => 'laptop-asus-vivobook-a415ea-i3' ,
                'so_luong' => 10,
                'gia_ban' => 60990000,
                'gia_khuyen_mai' => 31690000,
                'hinh_anh' => 'https://phucanhcdn.com/media/product/46461_vivobook_a415_silver_ha1.jpg',
                'mo_ta_ngan' => 'Laptop Asus VivoBook A415EA i3 (EB1748W) mang
                                 vẻ ngoài sang trọng, thanh lịch cùng hiệu năng
                                 ổn định đến từ con chip Intel thế hệ 11 tân tiến
                                 đáp ứng tốt mọi tác vụ văn phòng, học tập và giải
                                 trí cơ bản của người dùng.',
                'mo_ta_chi_tiet' => 'Laptop Asus VivoBook A415EA i3 (EB1748W) mang
                                    vẻ ngoài sang trọng, thanh lịch cùng hiệu năng
                                    ổn định đến từ con chip Intel thế hệ 11 tân tiến
                                    đáp ứng tốt mọi tác vụ văn phòng, học tập và giải
                                    trí cơ bản của người dùng.',
                'id_loai_san_pham' => 8,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Laptop Asus ZenBook UX425EA i5 1135G7/8GB/512GB' ,
                'slug_san_pham' => 'laptop-asus-zenbook-ux425ea-i5' ,
                'so_luong' => 10,
                'gia_ban' => 50990000,
                'gia_khuyen_mai' => 41690000,
                'hinh_anh' => 'https://anphat.com.vn/media/product/38124_laptop_asus_zenbook_14_ux425ea_ki429t_111.jpg',
                'mo_ta_ngan' => 'Với những thông số kỹ thuật ấn tượng cùng phong
                                cách thiết kế mỏng nhẹ - thời trang, laptop Asus
                                ZenBook UX425EA (KI839W) sẽ là một người bạn đồng
                                hành hoàn hảo cùng người dùng trong mọi tác vụ',
                'mo_ta_chi_tiet' => 'Với những thông số kỹ thuật ấn tượng cùng phong
                                    cách thiết kế mỏng nhẹ - thời trang, laptop Asus
                                    ZenBook UX425EA (KI839W) sẽ là một người bạn đồng
                                    hành hoàn hảo cùng người dùng trong mọi tác vụ',
                'id_loai_san_pham' => 8,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Laptop Asus Rog Zephyrus Gaming G14 GA401QH R7 5800HS/8GB/512GB/4GB GTX1650/120Hz' ,
                'slug_san_pham' => 'laptop-asus-rog-zephyrus-gaming-g14-ga401qh-r7' ,
                'so_luong' => 10,
                'gia_ban' => 70190000,
                'gia_khuyen_mai' => 46690000,
                'hinh_anh' => 'https://anphat.com.vn/media/product/33776_asus_rog_zephyrus_g14_ga401iu_ha075t_r7_4800hs_5_e8ef41fd36684981a3fbef0ef906d825_master.png',
                'mo_ta_ngan' => 'Laptop Asus Rog Zephyrus Gaming G14 GA401QH (K2091W)
                                là sự lựa chọn hoàn hảo với trang bị chip AMD hiệu
                                năng ấn tượng cùng card màn hình rời NVIDIA GTX sẵn
                                sàng giải quyết mọi tác vụ thiết kế đồ hoạ trơn tru
                                và chiến game cực phấn khích',
                'mo_ta_chi_tiet' => 'Laptop Asus Rog Zephyrus Gaming G14 GA401QH (K2091W)
                                    là sự lựa chọn hoàn hảo với trang bị chip AMD hiệu
                                    năng ấn tượng cùng card màn hình rời NVIDIA GTX sẵn
                                    sàng giải quyết mọi tác vụ thiết kế đồ hoạ trơn tru
                                    và chiến game cực phấn khích',
                'id_loai_san_pham' => 8,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Laptop Asus ExpertBook B9400CEA i5 1135G7/8GB/512GB' ,
                'slug_san_pham' => 'laptop-asus-expertbook-b9400cea-i5' ,
                'so_luong' => 10,
                'gia_ban' => 45190000,
                'gia_khuyen_mai' => 26690000,
                'hinh_anh' => 'https://anphat.com.vn/media/product/38383_1.png',
                'mo_ta_ngan' => 'Asus ExpertBook B9400CEA i5 1135G7 (KC1013W) mang thiết
                                kế hiện đại cùng cấu hình mạnh mẽ với nhiều tính năng bảo
                                mật cao, là người bạn đồng hành lý tưởng cho người dùng
                                doanh nhân, nhân viên văn phòng.',
                'mo_ta_chi_tiet' => 'Asus ExpertBook B9400CEA i5 1135G7 (KC1013W) mang thiết
                                    kế hiện đại cùng cấu hình mạnh mẽ với nhiều tính năng bảo
                                    mật cao, là người bạn đồng hành lý tưởng cho người dùng
                                    doanh nhân, nhân viên văn phòng.',
                'id_loai_san_pham' => 8,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Laptop Dell Gaming G15 5511 i5 11400H/8GB/256GB/4GB RTX3050/120Hz' ,
                'slug_san_pham' => 'laptop-dell-gaming-g15-5511-i5' ,
                'so_luong' => 10,
                'gia_ban' => 55190000,
                'gia_khuyen_mai' => 26690000,
                'hinh_anh' => 'https://phucanhcdn.com/media/product/45607_dell_gaming_g15_5515_phantom_grey_ha3.jpg',
                'mo_ta_ngan' => 'Mang đến cho người dùng hiệu năng ấn tượng, Dell Gaming G15
                                5511 i5 11400H (70266676) sở hữu thiết kế thời thượng cùng
                                con chip Intel thế hệ 11 tân tiến, là người cộng sử lý tưởng
                                cùng bạn chinh phục mọi chiến trường.',
                'mo_ta_chi_tiet' => 'Mang đến cho người dùng hiệu năng ấn tượng, Dell Gaming G15
                                    5511 i5 11400H (70266676) sở hữu thiết kế thời thượng cùng
                                    con chip Intel thế hệ 11 tân tiến, là người cộng sử lý tưởng
                                    cùng bạn chinh phục mọi chiến trường.',
                'id_loai_san_pham' => 9,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Laptop Dell XPS 17 9710 i7 11800H/16GB/1TB SSD/4GB RTX3050' ,
                'slug_san_pham' => 'laptop-dell-xps-17-9710-i7' ,
                'so_luong' => 10,
                'gia_ban' => 57190000,
                'gia_khuyen_mai' => 36690000,
                'hinh_anh' => 'https://phucanhcdn.com/media/product/45369_dell_alienware_m15_r6_gaming_ha2.jpg',
                'mo_ta_ngan' => 'Laptop Dell XPS 17 9710 (XPS7I7001W1) sẽ không làm người dùng
                                 thất vọng khi sở hữu ngoại hình thời thượng cùng những thông
                                 số kỹ thuật đẳng cấp. ',
                'mo_ta_chi_tiet' => 'Laptop Dell XPS 17 9710 (XPS7I7001W1) sẽ không làm người dùng
                                    thất vọng khi sở hữu ngoại hình thời thượng cùng những thông
                                    số kỹ thuật đẳng cấp. ',
                'id_loai_san_pham' => 9,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Laptop Dell Gaming Alienware m15 R6 i7 11800H/32GB/1TB SSD/8GB' ,
                'slug_san_pham' => 'laptop-dell-gaming-alienware-m15-r6-i7' ,
                'so_luong' => 10,
                'gia_ban' => 38190000,
                'gia_khuyen_mai' => 35690000,
                'hinh_anh' => 'https://phucanhcdn.com/media/product/45369_dell_alienware_m15_r6_gaming_ha2.jpg',
                'mo_ta_ngan' => 'Laptop Dell Gaming Alienware sở hữu CPU Intel Core i7 Tiger Lake
                                 11800H mang lại hiệu năng xử lý vượt trội. Cùng bạn thoả sức sáng tạo hình ảnh,
                                 video với card tích hợp NVIDIA GeForce RTX 3070, 8 GB hay giải trí với các tựa
                                 game hấp dẫn như CS:GO, GTAV,... ',
                'mo_ta_chi_tiet' => 'Laptop Dell Gaming Alienware sở hữu CPU Intel Core i7 Tiger Lake
                                    11800H mang lại hiệu năng xử lý vượt trội. Cùng bạn thoả sức sáng tạo hình ảnh,
                                    video với card tích hợp NVIDIA GeForce RTX 3070, 8 GB hay giải trí với các tựa
                                    game hấp dẫn như CS:GO, GTAV,... ',
                'id_loai_san_pham' => 9,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Laptop Dell Latitude 3520 i7 1165G7/8GB/512GB/Win10 Pro' ,
                'slug_san_pham' => 'laptop-dell-latitude-3520-i7' ,
                'so_luong' => 10,
                'gia_ban' => 48190000,
                'gia_khuyen_mai' => 25690000,
                'hinh_anh' => 'https://didongviet.vn/pub/media/catalog/product//d/e/dell-latitude-3520-70251603-didongviet.jpg',
                'mo_ta_ngan' => 'Laptop Dell Latitude 3520 i7 (70261780) sở hữu thiết hiện đại thường thấy
                                 của các sản phẩm nhà Dell, nhưng mang trong mình cấu hình mạnh mẽ
                                 vượt trội, là người trợ thủ đắc lực cho bạn từ công việc đến giải trí.',
                'mo_ta_chi_tiet' => 'Laptop Dell Latitude 3520 i7 (70261780) sở hữu thiết hiện đại thường thấy
                                    của các sản phẩm nhà Dell, nhưng mang trong mình cấu hình mạnh mẽ
                                    vượt trội, là người trợ thủ đắc lực cho bạn từ công việc đến giải trí. ',
                'id_loai_san_pham' => 9,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Laptop Dell Vostro 3400 i7 1165G7/8GB/512GB/2GB' ,
                'slug_san_pham' => 'laptop-dell-vostro-3400-i7' ,
                'so_luong' => 10,
                'gia_ban' => 38190000,
                'gia_khuyen_mai' => 22690000,
                'hinh_anh' => 'https://sieuviet.vn/hm_content/uploads/anh-san-pham/39756_laptop_dell_vostro_3400_p132g003_an_phat__2_.jpg',
                'mo_ta_ngan' => 'Dell Vostro 3400 i7 (V4I7015W1) mang trên mình bộ vi xử lý mạnh mẽ đến từ
                                con chip Intel Gen 11 với sứ mệnh phục vụ tốt mọi nhu cầu từ cơ bản đến nâng
                                 cao cho người dùng, đi kèm với đó là ngoại hình thanh lịch, tao nhã cùng card
                                 đồ họa rời ấn tượng, mang đến những trải nghiệm mới mẻ hơn bao giờ hết.',
                'mo_ta_chi_tiet' => 'Dell Vostro 3400 i7 (V4I7015W1) mang trên mình bộ vi xử lý mạnh mẽ đến từ
                                    con chip Intel Gen 11 với sứ mệnh phục vụ tốt mọi nhu cầu từ cơ bản đến nâng
                                    cao cho người dùng, đi kèm với đó là ngoại hình thanh lịch, tao nhã cùng card
                                    đồ họa rời ấn tượng, mang đến những trải nghiệm mới mẻ hơn bao giờ hết ',
                'id_loai_san_pham' => 9,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc ' ,
                'slug_san_pham' => 'tai-nghe-bluetooth-true-wireless-galaxy-buds-pro-bac' ,
                'so_luong' => 10,
                'gia_ban' => 8190000,
                'gia_khuyen_mai' => 5690000,
                'hinh_anh' => 'https://www.xtmobile.vn/vnt_upload/product/03_2022/thumbs/600_samsung_galaxy_buds_live_white.jpg',
                'mo_ta_ngan' => 'Tai nghe Bluetooth True Wireless Samsung Buds Pro sở hữu vẻ ngoài đẹp mắt thời
                                thượng với hai màu đen và trắng. Thiết kế mới trên hình dạng tai nghe cổ điển, có khả năng làm
                                giảm bớt sự khó chịu khi sử dụng tai nghe trong nhiều giờ và tai nghe cũng nằm chắc chắn phía
                                trong tai khi bạn tập luyện hay vận động. Đồng thời, các lỗ thoát khí giúp cân bằng áp suất trong
                                tai và tăng lưu lượng không khí, tạo cảm giác mềm mại dễ chịu khi sử dụng.',
                'mo_ta_chi_tiet' => 'Tai nghe Bluetooth True Wireless Samsung Buds Pro sở hữu vẻ ngoài đẹp mắt thời
                                    thượng với hai màu đen và trắng. Thiết kế mới trên hình dạng tai nghe cổ điển, có khả năng làm
                                    giảm bớt sự khó chịu khi sử dụng tai nghe trong nhiều giờ và tai nghe cũng nằm chắc chắn phía
                                    trong tai khi bạn tập luyện hay vận động. Đồng thời, các lỗ thoát khí giúp cân bằng áp suất trong
                                    tai và tăng lưu lượng không khí, tạo cảm giác mềm mại dễ chịu khi sử dụng. ',
                'id_loai_san_pham' => 15,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Tai nghe Bluetooth True Wireless Samsung Galaxy Buds Live R180 Gold' ,
                'slug_san_pham' => 'tai-nghe-true-wireless-samsung-galaxy-buds-live' ,
                'so_luong' => 10,
                'gia_ban' => 3190000,
                'gia_khuyen_mai' => 2590000,
                'hinh_anh' => 'https://cdn.tgdd.vn/Products/Images/54/252124/ai-nghe-bluetooth-true-wireless-samsung-galaxy-buds-live-r180-gold-thumb-600x600.jpeg',
                'mo_ta_ngan' => 'Samsung Galaxy Buds Live R180 Gold có một tone màu đồng khá sang trọng, quyến rũ ở
                                 cả trong và ngoài, rất phù hợp cho phái nữ. Hộp sạc của tai nghe Samsung Galaxy
                                 Buds Live dạng mở nắp vỏ sò, trọng lượng 42.2 gram nhỏ gọn, người dùng có thể
                                 đóng mở bằng một tay khá dễ dàng.',
                'mo_ta_chi_tiet' => 'Samsung Galaxy Buds Live R180 Gold có một tone màu đồng khá sang trọng, quyến rũ ở
                                    cả trong và ngoài, rất phù hợp cho phái nữ. Hộp sạc của tai nghe Samsung Galaxy
                                    Buds Live dạng mở nắp vỏ sò, trọng lượng 42.2 gram nhỏ gọn, người dùng có thể
                                    đóng mở bằng một tay khá dễ dàng.',
                'id_loai_san_pham' => 15,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Tai nghe Bluetooth Samsung Level U Pro BN920Cc ' ,
                'slug_san_pham' => 'tai-nghe-bluetooth-samsung-level-u-pro' ,
                'so_luong' => 10,
                'gia_ban' => 1819000,
                'gia_khuyen_mai' => 969000,
                'hinh_anh' => 'https://partakrayane.ir/wp-content/uploads/2020/05/Level-u-pro-3.jpg',
                'mo_ta_ngan' => 'Tai nghe Samsung Level U Pro BN920C được thiết kế sang trọng
                                 Toàn thân tai nghe được gia công bằng vỏ nhựa và cao su,
                                 phần cao su sẽ giúp tai nghe tiếp xúc với da trơn hơn, thoải mái hơn..',
                'mo_ta_chi_tiet' => 'Tai nghe Samsung Level U Pro BN920C được thiết kế sang trọng
                                    Toàn thân tai nghe được gia công bằng vỏ nhựa và cao su,
                                    phần cao su sẽ giúp tai nghe tiếp xúc với da trơn hơn, thoải mái hơn..',
                'id_loai_san_pham' => 15,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Tai nghe nhét tai Samsung EG920  ' ,
                'slug_san_pham' => 'tai-nghe-nhet-tai-samsung-eg920' ,
                'so_luong' => 10,
                'gia_ban' => 890000,
                'gia_khuyen_mai' => 690000,
                'hinh_anh' => 'https://cdn.tgdd.vn/Products/Images/54/113118/tai-nghe-nhet-tai-samsung-eg920b-avatar-600x600.jpg',
                'mo_ta_ngan' => 'Tai nghe nhét trong Samsung EG920B có đi nút đệm tai nghe dạng móc
                                 Giúp người đeo khi vận động mạnh sẽ không bị rớt ra',
                'mo_ta_chi_tiet' => 'Tai nghe nhét trong Samsung EG920B có đi nút đệm tai nghe dạng móc
                                     Giúp người đeo khi vận động mạnh sẽ không bị rớt ra',
                'id_loai_san_pham' => 15,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Tai nghe nhét tai Samsung IA500 Đen ' ,
                'slug_san_pham' => 'tai-nghe-nhet-tai-samsung-ia500-den' ,
                'so_luong' => 10,
                'gia_ban' => 990000,
                'gia_khuyen_mai' => 690000,
                'hinh_anh' => 'https://cdn.tgdd.vn/Products/Images/54/264068/nhet-tai-samsung-ia500-den-041221-063201-600x600.jpg',
                'mo_ta_ngan' => 'Dây tai nghe EP Samsung IA500 có độ dài là 1.25 m rất thuận tiện khi dùng, bạn có
                                 thể để điện thoại đã cắm dây tai nghe vào túi hoặc balo mà vẫn sử dụng được,
                                 không cần phải cầm trên tay để sử dụng. ',
                'mo_ta_chi_tiet' => 'Dây tai nghe EP Samsung IA500 có độ dài là 1.25 m rất thuận tiện khi dùng, bạn có
                                    thể để điện thoại đã cắm dây tai nghe vào túi hoặc balo mà vẫn sử dụng được,
                                    không cần phải cầm trên tay để sử dụng. ',
                'id_loai_san_pham' => 15,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Iphone Xs 128gb',
                'slug_san_pham' => 'iphone-Xs-128gb',
                'so_luong' => 10,
                'gia_ban' => 20000000,
                'gia_khuyen_mai' => 19000000,
                'hinh_anh' => 'https://www.xtsmart.vn/vnt_upload/product/01_2021/thumbs/600_iphone_xs_max_trang_xtsmart.jpg',
                'mo_ta_ngan' => 'Đến hẹn lại lên, năm nay Apple giới thiệu tới người dùng thế hệ tiếp theo với 3 phiên bản, trong đó có cái tên iPhone Xs 64 GB với những nâng cấp mạnh mẽ về phần cứng đến hiệu năng, màn hình cùng hàng loạt các trang bị cao cấp khác.',
                'mo_ta_chi_tiet' => 'Đến hẹn lại lên, năm nay Apple giới thiệu tới người dùng thế hệ tiếp theo với 3 phiên bản, trong đó có cái tên iPhone Xs 64 GB với những nâng cấp mạnh mẽ về phần cứng đến hiệu năng, màn hình cùng hàng loạt các trang bị cao cấp khác.',
                'id_loai_san_pham' => 6,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Iphone 13 Pro Max',
                'slug_san_pham' => 'iphone-13-pro-max',
                'so_luong' => 10,
                'gia_ban' => 35000000,
                'gia_khuyen_mai' => 33000000,
                'hinh_anh' => 'https://www.didongmy.com/vnt_upload/product/12_2021/thumbs/(600x600)_600_iphone_13_pro_max_gray_like_new_didongmy.jpg',
                'mo_ta_ngan' => 'iPhone 13 Pro Max xứng đáng là một chiếc iPhone lớn nhất, mạnh mẽ nhất và có thời lượng pin dài nhất từ trước đến nay sẽ cho bạn trải nghiệm tuyệt vời, từ những tác vụ bình thường cho đến các ứng dụng chuyên nghiệp.',
                'mo_ta_chi_tiet' => 'iPhone 13 Pro Max xứng đáng là một chiếc iPhone lớn nhất, mạnh mẽ nhất và có thời lượng pin dài nhất từ trước đến nay sẽ cho bạn trải nghiệm tuyệt vời, từ những tác vụ bình thường cho đến các ứng dụng chuyên nghiệp.',
                'id_loai_san_pham' => 6,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Samsung Galaxy Z Fold3 5G 256GB' ,
                'slug_san_pham' => 'samsung-galaxy-z-fold3-5g-256gb' ,
                'so_luong' => 10,
                'gia_ban' => 41990000,
                'gia_khuyen_mai' => 40990000,
                'hinh_anh' => 'https://smartviets.com/template/plugins/timthumb.php?src=/upload/image/fold%203/fold3%20xanh.jpg&w=600&h=600&q=80',
                'mo_ta_ngan' => 'Yên tâm tận hưởng sử dụng khả năng kháng nước  IPX8.
                                Chiến game đầy mạnh mẽ RAM 12 GB, Snapdragon 888.
                                Thoả sức mọi sáng tạo hỗ trợ kết nối với bút S Pen*
                                Thiết kế đẳng cấp, sang trọng màn hình gập bền bỉ, mượt mà.',
                'mo_ta_chi_tiet' => 'Yên tâm tận hưởng sử dụng khả năng kháng nước  IPX8.
                                    Chiến game đầy mạnh mẽ RAM 12 GB, Snapdragon 888.
                                    Thoả sức mọi sáng tạo hỗ trợ kết nối với bút S Pen*
                                    Thiết kế đẳng cấp, sang trọng màn hình gập bền bỉ, mượt mà.',
                'id_loai_san_pham' => 7,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Samsung Galaxy A03 3GB',
                'slug_san_pham' => 'samsung-galaxy-a03-3gb',
                'so_luong' => 10,
                'gia_ban' => 41990000,
                'gia_khuyen_mai' => 40990000,
                'hinh_anh' => 'https://cdn.tgdd.vn/Products/Images/42/267333/samsung-galaxy-a03-den-thumb-600x600.jpg',
                'mo_ta_ngan' => 'Yên tâm tận hưởng sử dụng khả năng kháng nước  IPX8.
                                Chiến game đầy mạnh mẽ RAM 12 GB, Snapdragon 888.
                                Thoả sức mọi sáng tạo hỗ trợ kết nối với bút S Pen*
                                Thiết kế đẳng cấp, sang trọng màn hình gập bền bỉ, mượt mà.',
                'mo_ta_chi_tiet' => 'Yên tâm tận hưởng sử dụng khả năng kháng nước  IPX8.
                                    Chiến game đầy mạnh mẽ RAM 12 GB, Snapdragon 888.
                                    Thoả sức mọi sáng tạo hỗ trợ kết nối với bút S Pen*
                                    Thiết kế đẳng cấp, sang trọng màn hình gập bền bỉ, mượt mà.',
                'id_loai_san_pham' => 7,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Samsung Galaxy Z Fold2 5G',
                'slug_san_pham' => 'samsung-galaxy-z-fold2-5g',
                'so_luong' => 10,
                'gia_ban' => 30000000,
                'gia_khuyen_mai' => 29000000,
                'hinh_anh' => 'https://www.xtmobile.vn/vnt_upload/product/10_2020/thumbs/600_600_galaxy_z_fold_2_5g_256gb_han_xtmobile.jpg',
                'mo_ta_ngan' => 'Màn hình liền mạch, mượt mà dynamic Amoled 2x 120 Hz.
                                Nhiếp ảnh chuyên nghiệp 3 camera 12 MP, hỗ trợ chụp đêm.
                                Mở khoá nhanh với 2 bảo mật vân tay cạnh viền và khuôn mặt.
                                Cấu hình khủng, chiến mọi game snapdragon 865+, RAM GB.',
                'mo_ta_chi_tiet' => 'Màn hình liền mạch, mượt mà dynamic Amoled 2x 120 Hz.
                                    Nhiếp ảnh chuyên nghiệp 3 camera 12 MP, hỗ trợ chụp đêm.
                                    Mở khoá nhanh với 2 bảo mật vân tay cạnh viền và khuôn mặt.
                                    Cấu hình khủng, chiến mọi game snapdragon 865+, RAM GB.',
                'id_loai_san_pham' => 7,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Samsung Galaxy S22',
                'slug_san_pham' => 'samsung-galaxy-s22',
                'so_luong' => 10,
                'gia_ban' => 23000000,
                'gia_khuyen_mai' => 22000000,
                'hinh_anh' => 'https://www.xtmobile.vn/vnt_upload/product/02_2022/thumbs/600_samsung_galaxy_s22_chinh_hang_xanh_1.jpg',
                'mo_ta_ngan' => 'Samsung Galaxy S22 ra mắt với diện mạo vô cùng tinh tế và trẻ trung, mang trong mình thiết kế phẳng theo xu hướng thịnh hành, màn hình 120 Hz mượt mà, cụm camera AI 50 MP và bộ xử lý đến từ Qualcomm.',
                'mo_ta_chi_tiet' => 'Samsung Galaxy S22 ra mắt với diện mạo vô cùng tinh tế và trẻ trung, mang trong mình thiết kế phẳng theo xu hướng thịnh hành, màn hình 120 Hz mượt mà, cụm camera AI 50 MP và bộ xử lý đến từ Qualcomm.',
                'id_loai_san_pham' => 7,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => ' Samsung Galaxy Note 20',
                'slug_san_pham' => 'samsung-galaxy-note-20',
                'so_luong' => 10,
                'gia_ban' => 23000000,
                'gia_khuyen_mai' => 16000000,
                'hinh_anh' => 'https://www.xtmobile.vn/vnt_upload/product/03_2021/thumbs/600_600_galaxy_note_20_ultra_5g_256gb_2.jpg',
                'mo_ta_ngan' => 'Tháng 8/2020, Galaxy Note 20 chính thức được lên kệ, với thiết kế camera trước nốt ruồi quen thuộc, cụm camera hình chữ nhật mới lạ cùng với vi xử lý Exynos 990 cao cấp của chính Samsung chắc hẳn sẽ mang lại một trải nghiệm thú vị cùng hiệu năng mạnh mẽ.',
                'mo_ta_chi_tiet' => 'Tháng 8/2020, Galaxy Note 20 chính thức được lên kệ, với thiết kế camera trước nốt ruồi quen thuộc, cụm camera hình chữ nhật mới lạ cùng với vi xử lý Exynos 990 cao cấp của chính Samsung chắc hẳn sẽ mang lại một trải nghiệm thú vị cùng hiệu năng mạnh mẽ.',
                'id_loai_san_pham' => 7,
                'is_open' => 1,
            ],
            [
                'ten_san_pham' => 'Xiaomi Watch S1',
                'slug_san_pham' => 'xiaomi-watch-s1',
                'so_luong' => 10,
                'gia_ban' => 7000000,
                'gia_khuyen_mai' => 5990000,
                'hinh_anh' => 'https://cdn.tgdd.vn/Products/Images/7077/274192/xiaomi-watch-s1-nau-thumb-mau-600x600.jpg',
                'mo_ta_ngan' => 'Màn hình: AMOLED, 1.43 inch, 46.5 mm, Tương thích: Android 6.0 trở lên, iOS 10 trở lên, Chế độ luyện tập, Theo dõi chu kì kinh nguyệt, Theo dõi giấc ngủ',
                'mo_ta_chi_tiet' => 'Màn hình:AMOLED1.43 inch, Thời lượng pin: Khoảng 12 ngày, Kết nối với hệ điều hành: Android 6.0 trở lêniOS 10 trở lên, Mặt: Kính Sapphire46.5 mm, Tính năng cho sức khỏe: Chế độ luyện tậpTheo dõi chu kì kinh nguyệtTheo dõi giấc ngủTheo dõi mức độ stress, Theo dõi nhịp thởTheo dõi nhịp tim 24hĐo nồng độ oxy (SpO2)',
                'id_loai_san_pham' => 12,
                'is_open' => 1
            ],
            [
                'ten_san_pham' => 'Xiaomi Mi Band 6',
                'slug_san_pham' => 'mi-band-6',
                'so_luong' => 10,
                'gia_ban' => 1290000,
                'gia_khuyen_mai' => 949000,
                'hinh_anh' => 'https://cdn.tgdd.vn/Products/Images/7077/236733/mi-band-6-thumb-1-1-600x600.jpg',
                'mo_ta_ngan' => 'Màn hình: AMOLED, 1.56 inch, 47.4 mm, Tương thích: Android 5.0 trở lên, iOS 10 trở lên, Chế độ luyện tập, Theo dõi giấc ngủ, Theo dõi mức độ stress',
                'mo_ta_chi_tiet' => 'Màn hình: AMOLED1.56 inch, Thời lượng pin: Khoảng 15 ngày, Kết nối với hệ điều hành: Android 5.0 trở lêniOS 10 trở lên, Mặt: Kính cường lực47.4 mm, Dây: 22 cm, Tính năng cho sức khỏe: Chế độ luyện tậpTheo dõi giấc ngủTheo dõi mức độ stressTính lượng calories tiêu thụĐo nhịp timĐo nồng độ oxy (SpO2)Đếm số bước chân, Tiện ích: Báo thứcDự báo thời tiếtRung thông báoThay mặt đồng hồTìm điện thoạiĐiều khiển chơi nhạcĐiều khiển chụp ảnh',
                'id_loai_san_pham' => 12,
                'is_open' => 1
            ],
            [
                'ten_san_pham' => 'Redmi Watch 2 Lite',
                'slug_san_pham' => 'redmi-watch-2-lite',
                'so_luong' => 10,
                'gia_ban' => 1490000,
                'gia_khuyen_mai' => 1290000,
                'hinh_anh' => 'https://cdn.tgdd.vn/Products/Images/7077/262620/redmi-watch-2-lite-600x600.jpg',
                'mo_ta_ngan' => 'Màn hình: TFT, 1.55 inch, 41.2 mm, Tương thích: Android 6.0 trở lên, iOS 10 trở lên, Chế độ luyện tập, Theo dõi chu kì kinh nguyệt, Theo dõi giấc ngủ',
                'mo_ta_chi_tiet' => 'Màn hình: TFT1.55 inch, Thời lượng pin: Khoảng 10 ngày (sử dụng trong điều kiện tiêu chuẩn), Kết nối với hệ điều hành: Android 6.0 trở lêniOS 10 trở lên, Mặt: Kính cường lực41.2 mm, Tính năng cho sức khỏe: Chế độ luyện tậpTheo dõi chu kì kinh nguyệtTheo dõi giấc ngủTheo dõi mức độ stressTheo dõi nhịp thởTheo dõi nhịp tim 24hĐo nhịp timĐo nồng độ oxy (SpO2)',
                'id_loai_san_pham' => 12,
                'is_open' => 1
            ],
            [
                'ten_san_pham' => 'Đồng hồ thông minh Xiaomi Watch S1 Active',
                'slug_san_pham' => 'xiaomi-watch-s1-active',
                'so_luong' => 10,
                'gia_ban' => 5490000,
                'gia_khuyen_mai' => 4490000,
                'hinh_anh' => 'https://cdn.tgdd.vn/Products/Images/7077/274193/xiaomi-watch-s1-active-den-thumb-mau-600x600.jpg',
                'mo_ta_ngan' => 'Màn hình: AMOLED, 1.43 inch, 47 mm, Tương thích: Android 6.0 trở lên, iOS 10 trở lên, Chế độ luyện tập, Theo dõi chu kì kinh nguyệt, Theo dõi giấc ngủ',
                'mo_ta_chi_tiet' => 'Màn hình: AMOLED1.43 inch, Thời lượng pin: Khoảng 12 ngày, Kết nối với hệ điều hành: Android 6.0 trở lêniOS 10 trở lên, Mặt: Kính cường lực Gorilla Glass 347 mm, Tính năng cho sức khỏe: Chế độ luyện tậpTheo dõi chu kì kinh nguyệtTheo dõi giấc ngủTheo dõi mức độ stressTheo dõi nhịp thởTheo dõi nhịp tim 24hĐo nồng độ oxy (SpO2)',
                'id_loai_san_pham' => 12,
                'is_open' => 1
            ],
            [
                'ten_san_pham' => 'Đồng hồ thông minh Mi Watch',
                'slug_san_pham' => 'mi-watch',
                'so_luong' => 10,
                'gia_ban' => 3490000,
                'gia_khuyen_mai' => 2390000,
                'hinh_anh' => 'https://cdn.tgdd.vn/Products/Images/7077/232899/mi-watch-den-thumb-600x600.jpg',
                'mo_ta_ngan' => 'Màn hình: AMOLED, 1.39 inch, 46 mm, Tương thích: Android 5.0 trở lên, iOS 11 trở lên, Chế độ luyện tập, Theo dõi giấc ngủ, Tính lượng calories tiêu thụ',
                'mo_ta_chi_tiet' => 'Màn hình: AMOLED1.39 inch, Thời lượng pin: Khoảng 16 ngàyKhoảng 50 giờ cho chế độ thể thao và GPS, Kết nối với hệ điều hành: Android 5.0 trở lêniOS 11 trở lên, Mặt: Kính cường lực Gorilla Glass 346 mm, Tính năng cho sức khỏe: Chế độ luyện tậpTheo dõi giấc ngủTính lượng calories tiêu thụTự động phát hiện chế độ tập luyệnĐo nhịp timĐo nồng độ oxy (SpO2)Đếm số bước chân',
                'id_loai_san_pham' => 12,
                'is_open' => 1
            ],
            [
                'ten_san_pham' => 'Apple Watch SE 40mm viền nhôm dây silicone',
                'slug_san_pham' => 'se-40mm-vien-nhom-day-cao-su-hong',
                'so_luong' => 10,
                'gia_ban' => 7390000,
                'gia_khuyen_mai' => 7390000,
                'hinh_anh' => "https://cdn.tgdd.vn/Products/Images/7077/229058/apple-watch-se-lte-40mm-vien-nhom-day-cao-su-hong-thumb-600x600.jpg",
                'mo_ta_ngan' => "Thiết kế sang trọng, hiện đại, mang nét đặc trưng của Apple",
                'mo_ta_chi_tiet' => "Thiết kế sang trọng, hiện đại, mang nét đặc trưng của Apple
                                        Apple Watch SE 40mm viền nhôm dây cao su hồng có khung viền chắc chắn, thiết kế bo tròn 4 góc giúp thao tác vuốt chạm thoải mái hơn. Mặt kính cường lực Ion-X strengthened glass với kích thước 1.57 inch, hiển thị rõ ràng. Khung viền nhôm chắc chắn cùng dây đeo cao su có độ đàn hồi cao, êm ái, tạo cảm giác thoải mái khi đeo.

                                        Apple Watch SE 40mm viền nhôm dây cao su hồng - thiết kế

                                        Chip xử lý S5 giúp cải thiện hiệu năng sản phẩm
                                        Apple Watch SE được trang bị chip S5 cho tốc độ xử lý nhanh gấp 2 lần so với phiên bản Apple Watch S3, giúp đồng hồ hoạt động mượt mà, ổn định, đem lại những trải nghiệm thú vị.

                                        Apple Watch SE 40mm viền nhôm dây cao su hồng - chip S5

                                        Hệ điều hành watchOS 7.0 với nhiều tính năng tiện lợi
                                        Ở phiên bản này, hệ điều hành WatchOS 7.0 sẽ bổ sung và nâng cấp hơn 40 tính năng mới như: Phát hiện rửa tay, Siri dịch nhanh, thêm nhiều giao diện mới, chia sẻ mặt đồng hồ, theo dõi giấc ngủ được chi tiết hơn, luyện tập thể thao nâng cao, cải tiến Siri, nâng cao bảo mật,...

                                        Apple Watch SE 40mm viền nhôm dây cao su hồng - hệ điều hành watchOS 7

                                        Màn hình OLED với công nghệ Retina hiện đại
                                        Màn hình của đồng hồ sử dụng tấm nền OLED với độ phân giải 324 x 394 pixels, mang đến độ sắc nét chân thực, màu sắc rõ ràng và đẹp mắt. Bên cạnh đó, mặt kính cường lực Ion-X strengthened glass chịu lực tốt, giúp bảo vệ đồng hồ an toàn trước các va chạm thường ngày.

                                        Apple Watch SE 40mm viền nhôm dây cao su hồng có màn hình OLED

                                        Nghe gọi trên đồng hồ thông qua Bluetooth
                                        Chiếc Apple Watch được trang bị tính năng nghe, gọi trên đồng hồ, hỗ trợ người dùng nhận thông báo, tin nhắn trên các nền tảng ứng dụng xã hội như (Facebook, Zalo, Viber,...) thông qua kết nối Bluetooth, giúp bạn tiện lợi hơn trong những lúc không thể cầm điện thoại lên để nghe máy.

                                        Apple Watch SE 40mm viền nhôm dây cao su hồng - nhận thông báo tin nhắn

                                        Bộ sưu tập giao hiện với phong cách mới mẻ, đa dạng
                                        Thoải mái lựa chọn giao diện phù hợp với phong cách riêng của bản thân với bộ sưu tập giao diện đa dạng, hoặc bạn cũng có thể tìm kiếm các giao diện yêu thích trên App Store.

                                        Apple Watch SE 40mm viền nhôm dây cao su hồng - bộ sưu tập mặt đồng hồ

                                        Pin sử dụng trong 1.5 ngày
                                        Apple Watch SE trang bị viên pin cho phép dùng được tối đa khoảng 1.5 ngày và chỉ mất khoảng 2 giờ để sạc đầy, giúp bạn có những trải nghiệm trọn vẹn trong ngày mà không lo gián đoạn giữa chừng.

                                        Apple Watch SE 40mm viền nhôm dây cao su hồng - pin 1.5 ngày

                                        Tính năng theo dõi sức khỏe 24/24
                                        - Đồng hồ được tích hợp tính năng theo dõi nhịp tim tiện lợi. Kết quả được hiển thị dưới dạng thông số cho bạn dễ dàng theo dõi và có những biện pháp chăm sóc sức khỏe hợp lý.

                                        - Tính năng theo dõi giấc ngủ cung cấp cho bạn những thông tin như chất lượng giấc ngủ, khoảng thời gian người dùng thức hoặc thời gian ngủ trung bình, giúp bạn đánh giá được tình trạng của mình và thay đổi để xây dựng thói quen đi ngủ đều đặn, tốt cho sức khỏe. Ngoài ra, tính năng này còn đưa ra một số lời khuyên để bạn cải thiện giấc ngủ của mình được tốt hơn. Tuy nhiên, người dùng cần phải đeo đồng hồ trong lúc ngủ thì mới có thể thực hiện tính năng này.

                                        Apple Watch SE 40mm viền nhôm dây cao su hồng - theo dõi sức khỏe

                                        Bảo vệ sức khỏe của bản thân với tính năng phát hiện té ngã
                                        Khi phát hiện người dùng gặp sự cố té ngã, Apple Watch sẽ gửi cảnh báo SOS, nếu người dùng nằm bất động hay không tắt cảnh báo này trong khoảng 15 giây thì sẽ tự động gọi đến các dịch vụ khẩn cấp hoặc các số liên lạc đã lưu trước đó, giúp bạn tránh được những rủi ro hoặc tai nạn bất ngờ.

                                        Apple Watch SE 40mm viền nhôm dây cao su hồng - phát hiện té ngã

                                        Nhiều chế độ tập luyện khác nhau được tích hợp trên đồng hồ
                                        Nhiều bài tập theo các bộ môn thể thao như: leo núi, chạy bộ, đạp xe, bơi lội, yoga,... với nhiều mức độ từ cơ bản đến nâng cao cho bạn một chế độ tập luyện bài bản, khoa học hơn. Cùng với khả năng định vị GPS chính xác, giúp nâng cao hiệu quả luyện tập thể thao và cải thiện sức khỏe mỗi ngày.

                                        Apple Watch SE 40mm viền nhôm dây cao su hồng - nhiều chế độ luyện tập

                                        Trợ lý ảo Siri - Hỗ trợ người dùng giải quyết nhiều vấn đề
                                        Siri có thể dịch nhanh 10 ngôn ngữ trên thế giới (chưa có tiếng Việt), nhận diện giọng nói dễ dàng. Với chức năng này, Siri sẽ giúp bạn thực hiện nhanh chóng một vài tác vụ đơn giản hoặc đưa ra hướng dẫn hỗ trợ bạn thực hiện.

                                        Apple Watch SE 40mm viền nhôm dây cao su hồng - trợ lý Siri

                                        Dễ dàng quản lý thành viên trong gia đình với tính năng Family Setup
                                        Tính năng Family Setup cho phép 1 tài khoản iCloud có thể quản lý nhiều chiếc đồng hồ thông minh Apple khác nhau, thuận tiện trong việc chăm sóc trẻ em và người già thông qua các tính năng: theo dõi sức khỏe, định vị trẻ em, phát hiện té ngã,...

                                        Apple Watch SE 40mm viền nhôm dây cao su hồng - Family Setup

                                        Lưu ý: Tính năng này hiện không khả dụng tại Việt Nam.

                                        Tắm, bơi ở vùng nước nông với chỉ số chống nước 5 ATM
                                        Đồng hồ có hệ số chống nước 5 ATM - ISO 22810:2010 (Tắm, Bơi vùng nước nông) nên có thể được sử dụng trong các hoạt động dưới mặt nước nông như bơi trong bể hoặc ở biển. Không nên sử dụng khi lặn với bình khí, lướt ván nước hoặc các hoạt động khác liên quan đến nước có tốc độ cao hoặc nhấn chìm dưới mực nước nông. Bật tính năng khóa chống nước trước khi mang sản phẩm đi bơi, đi mưa, không ấn các nút điều chỉnh, không dùng trong phòng tắm hơi, tắm nước nóng.

                                        Apple Việt Nam không bảo hành, đổi trả trong trường hợp sản phẩm bị vào nước.

                                        Xem thêm hướng dẫn sử dụng và cách xử lý sản phẩm khi vào nước tại đây.

                                        Apple Watch SE 40mm viền nhôm dây cao su hồng có hệ số chống nước 5 ATM

                                        Thêm nhiều tính năng khác, tiện lợi hơn
                                        Apple Watch SE sở hữu nhiều tiện ích khác như: Dự báo thời tiết, la bàn, đồng hồ bấm giờ, điều khiển chơi nhạc, báo thức, tìm điện thoại, đếm bước chân, tính lượng calories tiêu thụ, đếm quãng đường đi được,...

                                        Apple Watch SE 40mm viền nhôm dây cao su hồng - tiện ích khác

                                        Đánh giá chung, đồng hồ thông minh này sở hữu thiết kế hiện đại, sang trọng, màn hình to rõ, cho hình ảnh sắc nét, đầy sống động, dây đeo cao su. Bên cạnh đó, các tính năng như đo nhịp tim, theo dõi giấc ngủ, phát hiện sự cố, rèn luyện thể thao nâng cao, kết nối gia đình (Family setup), Apple Watch SE sẽ mang đến những trải nghiệm thú vị trong cuộc sống hiện đại ngày nay.",
                'id_loai_san_pham' => 13,
                'is_open' => 1
            ],
            [
                'ten_san_pham' => 'Apple Watch S6 LTE 40mm viền nhôm dây silicone',
                'slug_san_pham' => 's6-lte-40mm-vien-nhom-day-cao-su-hong',
                'so_luong' => 10,
                'gia_ban' => 8990000,
                'gia_khuyen_mai' => 8490000,
                'hinh_anh' => "https://dienmay.vatbau.com/Products/Images/7077/229059/apple-watch-se-lte-44mm-vien-nhom-day-cao-su-hong-thumb-600x600.jpg",
                'mo_ta_ngan' => "Kiểu dáng thời thượng đi cùng sắc hồng nữ tính, trẻ trung",
                'mo_ta_chi_tiet' => 'Kiểu dáng thời thượng đi cùng sắc hồng nữ tính, trẻ trung
                                        Apple Watch S6 LTE 40mm viền nhôm dây cao su hồng được trang bị khung viền nhôm và mặt kính Ion-X strengthened glass bền bỉ và cứng cáp, chịu lực tốt, cho bạn thoải mái vận động, không ngại những va đập thường ngày. Dây đeo cao su không thấm nước, êm nhẹ, cho bạn cảm giác dễ chịu suốt ngày dài.

                                        Apple Watch S6 LTE 40mm viền nhôm dây cao su hồng - thiết kế

                                        Bộ vi xử lý S6 cho hiệu năng cao hơn 20% so với dòng chip S5
                                        Apple Watch Series 6 được trang bị con chip S6 hoàn toàn mới, đây là một bước cải tiến vượt bậc, cho hiệu năng cao hơn 20% so với dòng chip đời trước. Người dùng có thể thoải mái trải nghiệm, lướt đồng hồ mượt mà, không lo giật lag.

                                        Apple Watch S6 LTE 40mm viền nhôm dây cao su hồng - chip S6

                                        WatchOS 7 - hệ điều hành tối ưu
                                        Không chỉ trang bị con chip mạnh mẽ, Apple Watch rất chú trọng đến hệ điều hành, đã trang bị cho chiếc đồng hồ thông minh này hệ điều hành WatchOS 7 với nhiều tính năng độc đáo như: Chế độ rửa tay, Siri dịch nhanh, thêm mặt đồng hồ mới, chia sẻ mặt đồng hồ, theo dõi giấc ngủ, luyện tập thể thao nâng cao, Fitness+,... cho bạn nhiều phút giây trải nghiệm cùng đồng hồ thật thú vị.

                                        Apple Watch S6 LTE 40mm viền nhôm dây cao su hồng - hệ điều hành watchOS 7

                                        Màn hình Retina hiển thị sắc nét
                                        Apple Watch 2020 được trang bị màn hình OLED Retina 1.57 inch với độ phân giải 324 x 394 pixels, cho hình ảnh sắc nét, sống động, đầy rực rỡ. Tính năng màn hình luôn luôn hiển thị giúp bạn quan sát mọi thông tin dễ dàng và không bỏ lỡ các thông báo quan trọng, chỉ bằng một cái liếc mắt. Mặt kính Ion-X strengthened glass cứng cáp, chống trầy xước hiệu quả sẽ bảo vệ đồng hồ an toàn.

                                        Apple Watch S6 LTE 40mm viền nhôm dây cao su hồng - màn hình OLED

                                        Sở hữu bộ sưu tập mặt đồng hồ hiện đại, phong cách
                                        Apple Watch S6 LTE có sẵn nhiều mặt đồng hồ để người dùng thay đổi nếu muốn. Ngoài ra, bạn có thể thêm mặt cho đồng hồ thông qua App Store, giúp bạn đổi mới phong cách cho chiếc đồng hồ của mình, khiến chúng trở nên mới mẻ, không bị nhàm chán.

                                        Apple Watch S6 LTE 40mm viền nhôm dây cao su hồng - bộ sưu tập mặt đồng hồ

                                        Hỗ trợ eSim cho bạn nghe gọi trên đồng hồ mà không cần kết nối với điện thoại
                                        Được tích hợp eSim giúp bạn thoải mái nghe gọi, nhắn tin, xem thông báo ngay trên đồng hồ mà không cần kết nối với điện thoại. Giờ đây, bạn có thể thoải mái chạy bộ, tập thể dục mà không cần mang theo điện thoại bên mình.

                                        Xem thêm: Cách kết nối eSIM trên smartwatch

                                        Apple Watch S6 LTE 40mm viền nhôm dây cao su hồng - eSim

                                        Các bài tập luyện thể thao hiệu quả và đa dạng
                                        Đồng hồ Apple Watch được tích hợp sẵn nhiều ứng dụng và chế độ tập luyện gồm chạy bộ, gym, golf, đạp xe, yoga, bơi,… với nhiều mức độ từ cơ bản đến nâng cao. Các số liệu tập luyện sẽ hiển thị ngay trên đồng hồ, giúp người dùng dễ dàng theo dõi và đặt ra mục tiêu luyện tập, nâng cao thành tích và cải thiện sức khỏe của bản thân.

                                        Apple Watch S6 LTE 40mm viền nhôm dây cao su hồng - nhiều chế độ luyện tập

                                        Theo dõi tình trạng sức khỏe của bản thân tốt hơn
                                        Hỗ trợ bạn chăm sóc sức khỏe tốt hơn với chức năng đo nhịp tim, theo dõi giấc ngủ. Kết quả sẽ hiển thị dưới dạng các thông số, giúp bạn dễ dàng theo dõi và có những biện pháp nhằm cải thiện sức khỏe tốt hơn. Ngoài ra còn có thêm nhiều tính năng theo dõi sức khỏe khác như: tính quãng đường chạy, đếm số bước chân, đo lượng calories tiêu thụ,...

                                        Apple Watch S6 LTE 40mm viền nhôm dây cao su hồng - theo dõi sức khỏe tốt hơn

                                        Hỗ trợ đo SpO2 và ECG tiện lợi
                                        Ngoài ra, Apple Watch S6 LTE được trang bị cảm biến SpO2 giúp theo dõi nồng độ oxy trong máu. Bên cạnh đó Apple cũng tích hợp tính năng đo điện tâm đồ ECG, đây là hai tính năng còn rất mới và chỉ những dòng đồng hồ cao cấp mới được trang bị. Nhờ đó người dùng dễ dàng theo dõi và chăm sóc sức khỏe tốt hơn.

                                        Apple Watch S6 LTE 40mm viền nhôm dây cao su hồng hỗ trợ đo SpO2 và ECG

                                        Pin dùng được 1.5 ngày, sạc đầy trong 2 giờ
                                        Đồng hồ Apple có viên pin cho thời gian sử dụng trong khoảng 1.5 ngày, cùng cáp sạc từ tính với thời gian sạc đầy pin khoảng 2 giờ. Với thời lượng pin như vậy cũng sẽ giúp bạn hoạt động cả ngày mà không lo bị gián đoạn, hết pin.

                                        Lưu ý: Thời gian sử dụng pin có thể thay đổi tùy theo mật độ sử dụng của người dùng.

                                        Apple Watch S6 LTE 40mm viền nhôm dây cao su hồng - pin 1.5 ngày

                                        Phát hiện sự cố té ngã giúp bảo vệ bạn toàn diện
                                        Nếu trong quá trình hoạt động, tập luyện xảy ra sự cố té ngã và người dùng bất động trong vòng 15 giây, Apple Watch sẽ gửi tín hiệu SOS đến các số liên lạc khẩn cấp kèm theo vị trí thời gian thực, thuận tiện cho việc cứu hộ.

                                        Apple Watch S6 LTE 40mm viền nhôm dây cao su hồng - phát hiện té ngã

                                        Family Setup - tính năng giúp bạn chăm sóc gia đình tốt hơn
                                        Với tính năng này, một tài khoản iCloud của bạn có thể quản lý nhiều chiếc Apple Watch khác nhau, thuận lợi để chăm sóc người già và trẻ em thông qua các chức năng theo dõi sức khỏe, định vị trẻ em, phát hiện té ngã,...

                                        * Lưu ý: Tính năng hiện chưa khả dụng ở Việt Nam.

                                        Apple Watch S6 LTE 40mm viền nhôm dây cao su hồng - Family Setup

                                        Trợ lý ảo Siri
                                        Siri giúp người đeo có thể dịch nhanh 10 ngôn ngữ trên thế giới (chưa có tiếng Việt). Với chức năng này, Siri sẽ giúp bạn thực hiện nhanh chóng một vài tác vụ đơn giản hoặc đưa ra hướng dẫn hỗ trợ bạn thực hiện.

                                        Apple Watch S6 LTE 40mm viền nhôm dây cao su hồng - trợ lý ảo Siri

                                        Tắm, bơi ở vùng nước nông với chỉ số chống nước 5 ATM
                                        Đồng hồ đạt chuẩn chống nước 5 ATM (theo tiêu chuẩn ISO 22810:2010), có thể được sử dụng trong các hoạt động dưới mặt nước nông như bơi trong bể hoặc ở biển, không nên sử dụng khi lặn với bình khí, lướt ván nước hoặc các hoạt động khác liên quan đến nước có tốc độ cao hoặc nhấn chìm dưới mực nước nông. Bật tính năng khóa chống nước trước khi mang sản phẩm đi bơi, đi mưa, không ấn các nút điều chỉnh, không dùng trong phòng tắm hơi, tắm nước nóng.

                                        Apple Việt Nam không bảo hành, đổi trả trong trường hợp sản phẩm bị vào nước.

                                        Xem thêm hướng dẫn sử dụng và cách xử lý sản phẩm khi vào nước tại đây.

                                        Apple Watch S6 LTE 40mm viền nhôm dây cao su hồng đạt chuẩn chống nước 5 ATM

                                        Trải nghiệm tuyệt vời hơn với nhiều tiện ích khác
                                        Apple Watch LTE 40mm còn nhiều tính năng hữu ích như tìm điện thoại, báo thức, đồng hồ đếm ngược, dự báo thời tiết, nghe nhạc qua tai nghe bluetooth, điều khiển chơi nhạc,...

                                        Apple Watch S6 LTE 40mm viền nhôm dây cao su hồng - thêm nhiều tiện ích

                                        Apple Watch S6 LTE 40mm viền nhôm có thiết kế hiện đại và đẳng cấp, sở hữu bộ vi xử lý S6 hiện đại, hệ điều hành WatchOS 7 cùng nhiều tính năng theo dõi và chăm sóc sức khỏe, hứa hẹn mang đến cho người dùng những trải nghiệm thú vị trong cuộc sống thường ngày.',
                'id_loai_san_pham' => 13,
                'is_open' => 1
            ],
            [
                'ten_san_pham' => 'Apple Watch Series 7 LTE 41mm',
                'slug_san_pham' => 'apple-watch-s7-lte-41mm',
                'so_luong' => 10,
                'gia_ban' => 14990000,
                'gia_khuyen_mai' => 12990000,
                'hinh_anh' => "https://cdn.tgdd.vn/Products/Images/7077/250639/apple-watch-s7-lte-41mm-xanh-la-thumb-660x600.jpg",
                'mo_ta_ngan' => "Thiết kế hiện đại và sang trọng",
                'mo_ta_chi_tiet' => "Apple Watch S7 LTE 41 mm viền nhôm dây cao su có thiết kế được nâng cấp hơn so với phiên bản tiền nhiệm. Sở hữu vẻ ngoài sang trọng và hiện đại, Apple Watch S7 được thiết kế các góc bo tròn mềm mại với mặt đồng hồ được vác cong tạo cảm giác liền mạch hơn với khung viền. Phần khung viền được thiết kế mỏng hơn 40% và làm từ vật liệu nhôm tái chế 100% thân thiện với môi trường. Dây đeo cao su có độ đàn hồi tốt, thoải mái khi đeo và chống thấm mồ hôi hiệu quả.

                                    Apple Watch Series 7 LTE 41mm - Thiết kế

                                    Màn hình OLED có độ sáng cao, sắc nét
                                    Mặt đồng hồ sở hữu kích thước 1.61 inch có diện tích tăng 20% và nội dung hiển thị nhiều hơn 50% so với phiên bản cũ. Ở phiên bản này, Apple đã sử dụng tấm nền OLED có độ phân giải 484 x 369 pixels cho khả năng hiển thị sắc nét đến từng chi tiết. Các nút bấm trên màn hình cũng được thiết kế to hơn giúp người dùng dễ thao tác.

                                    Apple Watch Series 7 LTE 41mm - Màn hình OLED

                                    Mặt kính Ion-X strengthened glass dày hơn 50% có khả năng chống bụi IP6X và giúp hạn chế trầy xước tối đa khi va chạm. Ngoài ra, Apple Watch S7 còn hỗ trợ tính năng Always-On Retina display có độ sáng cao hơn 70% so với Series 6, cho phép bạn xem giờ và thông báo mà không cần nhấc cổ tay hay chạm vào màn hình. Tính năng này còn giúp bạn tiết kiệm pin hơn trong quá trình sử dụng lâu dài.

                                    Apple Watch Series 7 LTE 41mm - Màn hình luôn hiển thị

                                    Hệ điều hành WatchOS 8 tối ưu tốt
                                    Hệ điều hành WatchOS 8 có giao diện mượt mà và dễ sử dụng hơn được Apple thiết kế riêng nhằm tối ưu hiển thị cho màn hình lớn trên Apple Watch S7. WatchOS 8 được trang bị nhiều tính năng như theo dõi sức khỏe, hỗ trợ các bài tập thể thao, theo dõi giấc ngủ, tính lượng calories tiêu thụ,... Bàn phím fullsize và lướt QuickPath hỗ trợ người dùng thao tác nhanh và chính xác. Với công nghệ machine learning sẽ tiên đoán trước được những gì bạn sẽ nhập, giúp tiết kiệm thời gian.

                                    Lưu ý: Hệ điều hành WatchOS 8.0 yêu cầu được ghép nối với iPhone (hỗ trợ từ iPhone 6s trở lên) sử dụng hệ điều hành iOS phiên bản mới nhất.

                                    Apple Watch Series 7 LTE 41mm - WatchOS 8

                                    Sở hữu bộ sưu tập mặt đồng hồ đa dạng
                                    Với việc được tích hợp hệ điều hành WatchOS 8 lần đầu được ra mắt, giờ đây người dùng có thể cá nhân hóa chiếc đồng hồ của mình bằng cách tạo ra những mặt đồng hồ theo sở thích cá nhân, phù hợp với cảm xúc và trang phục của bạn ngày hôm đó. Nổi bật nhất là mặt đồng hồ, Apple đã đẩy tất cả chữ số ra sát cạnh viền và chúng có thể chuyển động linh hoạt theo thời gian thực.

                                    Apple Watch Series 7 LTE 41mm - Bộ sưu tập mặt đồng hồ

                                    Nghe gọi trực tiếp trên đồng hồ với eSim
                                    Mẫu đồng hồ thông minh này có hỗ trợ eSim giúp bạn có thể nghe gọi trực tiếp trên đồng hồ mà không cần đến điện thoại. Kết nối qua Bluetooth v5.0 để nhận những thông báo tin nhắn, các cuộc gọi, Messenger, Zalo, Line,...

                                    Apple Watch Series 7 LTE 41mm - Hỗ trợ eSim

                                    Thời lượng pin 1.5 ngày cho 1 lần sạc
                                    Thời lượng pin trên S7 cho thời gian sử dụng khoảng 1.5 ngày chỉ với một lần sạc đầy trong 2 giờ (tốc độ nhanh hơn S6 33%).

                                    Lưu ý: thời lượng này có thể thay đổi tùy theo mức độ sử dụng. Tính năng sạc nhanh hiện không khả dụng tại Việt Nam.

                                    Apple Watch Series 7 LTE 41mm - Thời lượng pin

                                    Hỗ trợ theo dõi sức khỏe liên tục
                                    - Chức năng đo nhịp tim được sử dụng để cung cấp các chỉ số nhịp tim hoạt động trong một phút. Nếu nhịp tim tăng hoặc giảm quá mức cho phép, đồng hồ sẽ cảnh báo và đưa ra một số lời khuyên giúp bạn cải thiện tình trạng sức khỏe.

                                    - Chức năng theo dõi giấc ngủ cung cấp thông tin về chất lượng giấc ngủ để bạn đánh giá và thiết lập thói quen ngủ hợp lý và lành mạnh.

                                    - Apple Watch còn tích hợp thêm các tính năng theo dõi sức khỏe như đo điện tâm đồ ECG, đo nồng độ oxy trong máu SpO2,... giúp người dùng luôn nắm bắt được chỉ số và phát hiện sớm các vấn đề về sức khỏe.

                                    Apple Watch Series 7 LTE 41mm - Theo dõi sức khoẻ

                                    An toàn hơn với tính năng phát hiện té ngã
                                    Với tính năng này sẽ hỗ trợ bạn gửi SOS tới số điện thoại đã được cung cấp trước đó mỗi khi bạn bị ngã và bất động trong 15 giây. Tính năng này phù hợp cho những bạn thích đi chơi xa một mình hoặc những người lớn tuổi.

                                    Apple Watch Series 7 LTE 41mm - Phát hiện té ngã

                                    Trợ lý ảo Siri hỗ trợ tốt người dùng
                                    Trợ lý ảo Siri có khả năng nhận diện giọng nói dễ dàng và dịch nhanh được 10 ngôn ngữ khác nhau (chưa có tiếng Việt). Ngoài ra, Siri còn thực hiện các tác vụ đơn giản theo yêu cầu như mở ứng dụng, chơi nhạc,...

                                    Apple Watch Series 7 LTE 41mm - Trợ lý ảo Siri

                                    Nhiều chế độ luyện tập và mức độ khác nhau
                                    Apple Watch S7 được tích hợp nhiều chế độ luyện tập khác nhau từ đạp xe, chạy bộ, leo núi, bơi đội, yoga,... giúp người dùng cải thiện sức khỏe và tăng cường sức đề kháng. Các bài tập còn có tính năng tự động tạm dừng và tiếp tục, do đó các chỉ số phản ánh chính xác hơn thời gian dành cho việc di chuyển hay đứng yên, chẳng hạn như bạn dừng lại để uống nước.

                                    Apple Watch Series 7 LTE 41mm - Chế độ luyện tập

                                    An tâm hơn với chỉ số chống nước WR50
                                    Chỉ số chống nước WR50 giúp chiếc đồng hồ chống nước ở độ sâu 50 mét theo tiêu chuẩn ISO 22810: 2010 nên người dùng có thể thoải sức mang đi tắm hay bơi ở những nơi có vùng nước nông. Lưu ý, bạn không nên ấn các nút điều chỉnh và sử dụng trong phòng tắm hơi, tắm nước nóng, không nên sử dụng khi lặn với bình khí, lướt ván nước hoặc các hoạt động khác liên quan đến nước có tốc độ cao hoặc nhấn chìm dưới mực nước nông.

                                    Apple Việt Nam không bảo hành, đổi trả trong trường hợp sản phẩm bị vào nước.

                                    Xem thêm hướng dẫn sử dụng và cách xử lý sản phẩm khi vào nước tại đây.

                                    Apple Watch Series 7 LTE 41mm - Độ bền

                                    Đi kèm nhiều tiện ích khác
                                    Mẫu đồng hồ thông minh còn được trang bị thêm nhiều tiện ích như bấm giờ, GPS, báo thức, dự báo thời tiết, la bàn, tìm điện thoại,... Bạn có thể nghe nhạc và podcast trực tuyến thông qua ứng dụng Apple Music với kho lưu trữ hơn 75 triệu bài hát, giúp bạn thư giãn sau những giờ làm việc căng thẳng.

                                    Apple Watch Series 7 LTE 41mm - Tiện ích khác

                                    Apple Watch S7 LTE 41 mm viền nhôm dây cao su là sản phẩm cao cấp có thiết kế ấn tượng. Chiếc đồng hồ có kích thước 1.61 inch có diện tích hiển thị lớn hơn, kết hợp cùng tấm nền OLED rực rỡ, mang lại trải nghiệm về màu sắc tuyệt vời. Các tính năng theo dõi và chăm sóc sức khỏe luôn là điểm nhấn nổi bật trên những mẫu đồng hồ thông minh của Apple. Với những nâng cấp lớn về thiết kế và phần mềm, đây chắc chắn sẽ là một sự lựa chọn tuyệt vời dành cho bạn.",
                'id_loai_san_pham' => 13,
                'is_open' => 1
            ],
            [
                'ten_san_pham' => 'Apple Watch Series 7 LTE 41mm dây thép',
                'slug_san_pham' => 'apple-watch-s7-lte-41mm-day-thep',
                'so_luong' => 5,
                'gia_ban' => 20990000,
                'gia_khuyen_mai' => 19000000,
                'hinh_anh' => "https://cdn.tgdd.vn/Products/Images/7077/250651/apple-watch-s7-lte-41mm-day-thep-bac-thumb-1-600x600.jpg",
                'mo_ta_ngan' => "Thiết kế thời thượng, sang trọng cùng bo cong quen thuộc của Apple",
                'mo_ta_chi_tiet' => "Thiết kế thời thượng, sang trọng cùng bo cong quen thuộc của Apple
                                Apple Watch S7 LTE 41 mm được trang bị khung viền thép không gỉ cứng cáp, trang nhã cùng phần thiết kế bo cong mềm mại quen thuộc của nhà Apple, bên cạnh đó bề mặt đồng hồ có kích thước 1.61 inch (diện tích màn hình tăng 20% so với phiên bản cũ) được bảo vệ bởi lớp kính Sapphire cao cấp. Phần viền của đồng hồ được làm trau chuốt hơn với độ dày chỉ 1.7 mm, tạo cảm giác tràn viền nhiều hơn (phần viền mỏng hơn 60% so với Apple Watch S6).

                                Apple Watch Series 7 LTE 41mm dây thép - Thiết kế

                                Màn hình phiên bản S7 lần này của Apple cũng được mở rộng với diện tích màn hình lớn hơn 50% so với các dòng đồng hồ thông minh cũng hãng trước đây, qua đó người dùng có thể đọc được nhiều thông tin hơn mà không cần phải lướt nhiều, gây mất thời gian.

                                Hệ điều hành WatchOS 8 hiện đại - nâng cấp nhiều tính năng hơn
                                Hệ điều hành WatchOS 8 được ra mắt nhằm tối ưu các tính năng và hiển thị màn hình lớn của Apple Watch S7 làm tăng trải nghiệm cho người dùng trong việc thao tác. Với giao diện mượt mà cùng hiệu năng mạnh mẽ, hệ điều hành WatchOS 8 đã làm các nút, tiêu đề menu lớn hơn trong các ứng dụng như đồng hồ bấm giờ, báo thức,... cùng bàn phím fullsize cho phép người dùng gõ, lướt QuickPath.

                                Lưu ý: Hệ điều hành WatchOS 8.0 yêu cầu iPhone được ghép nối sử dụng hệ điều hành iOS phiên bản mới nhất (hỗ trợ từ iPhone 6S trở lên).

                                Apple Watch Series 7 LTE 41mm dây thép - WatchOS 8

                                Màn hình OLED mang đến những hình ảnh đẹp mắt và sống động
                                Mẫu đồng hồ thông minh S7 của Apple sử dụng tấm nền OLED với độ phân giải 484 x 396 pixels, mang đến cho người sử dụng những hình ảnh sống động, đầy màu sắc. Ngoài ra, đồng hồ còn được hỗ trợ tính năng Always-On Retina display có độ sáng hơn 70% so với Series 6, bạn có thể theo dõi thời gian hoặc thông báo mà không cần nhấc cổ tay hay chạm vào màn hình. Tính năng này cũng giúp đồng hồ tiết kiệm được một lượng pin khá lớn khi không phải sáng màn hình quá nhiều mỗi khi người dùng cử động cổ tay.

                                Apple Watch Series 7 LTE 41mm dây thép - Màn hình OLED

                                Thoải mái thay đổi mặt đồng hồ mỗi ngày với bộ sưu tập đa dạng
                                Bên cạnh việc nâng cấp các tính năng, hệ điều hành WatchOS 8 cũng mang đến cho người dùng của mình những mặt đồng hồ đặc biệt, thú vị cho bạn thỏa sức lựa chọn mặt đồng hồ hàng ngày mà không lo nhàm chán. Một số mặt đồng hồ thú vị mà bạn có thể thử như mặt, với thiết kế hiện đại, đưa mặt số nằm cạnh màn hình và chuyển động linh hoạt cả ngày hay mặt cổ điển, tiện lợi giúp bạn theo dõi thời gian ở 24 múi giờ xung quanh một mặt số kép.

                                Apple Watch Series 7 LTE 41mm dây thép - Bộ sưu tập màn hình đồng hồ

                                Thoải mái sử dụng đồng hồ với thời lượng pin 1.5 ngày
                                Với viên pin có dung lượng 265.9 mAh và thời gian sử dụng lên đến 1.5 ngày, một con số không quá ấn tượng với một chiếc đồng hồ thông minh nhưng đủ cho bạn có thể sử dụng, trải nghiệm liền mạch cả ngày dài mà không lo hết pin giữa chừng. Bù lại với thời lượng sử dụng khá ngắn, Apple đã trang bị một đế sạc nam châm giúp bạn có thể tiếp tục sử dụng đồng hồ chỉ sau 45 phút để sạc từ 0 - 80% (tốc độ sạc nhanh hơn Series 6 33%).

                                Lưu ý: thời lượng này có thể thay đổi tùy theo mức độ sử dụng. Tính năng sạc nhanh hiện không khả dụng tại Việt Nam.

                                Apple Watch Series 7 LTE 41mm dây thép - Thời lượng pin

                                Thoải mái sử dụng khi tắm và bơi ở vùng nước nông với chỉ số chống nước WR50
                                Được khẳng định là mẫu đồng hồ thông minh bền nhất của hãng, Apple Watch S7 có khả năng chống va đập và kháng bụi tốt nhờ chỉ số chống bụi IP6X. Bên cạnh đó, người dùng cũng không cần quá lo lắng khi đi tắm hoặc bơi với chỉ số chống nước WR50 theo tiêu chuẩn ISO 22810:2010. Khuyến khích, để đồng hồ ở những nơi khô ráo khi tham gia các hoạt động liên quan đến nước tốc độ cao hoặc lặn dưới độ sâu nông. Bật tính năng khóa chống nước trước khi mang sản phẩm đi bơi, đi mưa, không ấn các nút điều chỉnh, không dùng trong phòng tắm hơi, tắm nước nóng.

                                Apple Watch Series 7 LTE 41mm dây thép - Độ bền

                                Apple Việt Nam không bảo hành, đổi trả trong các trường hợp sản phẩm bị hư hỏng do vào nước.

                                Xem thêm hướng dẫn và cách xử lý sản phẩm khi vào nước tại đây.

                                Tính năng theo dõi sức khỏe hiện đại cùng công nghệ cảm biến mang tính cách mạng
                                Các tính năng chăm sóc sức khỏe của mẫu Apple Watch lần này cũng được nâng cấp mạnh mẽ, trong đó có các công nghệ cảm biến hiện đại cung cấp cho bạn thông tin chi tiết về các chỉ số sức khỏe cần thiết. Một số tính năng đáng chú ý của đồng hồ như:

                                - Chức năng đo nhịp tim qua ngón tay hỗ trợ theo dõi nhịp tim trong khoảng thời gian xác định. Nếu nhịp tim của người dùng tăng hoặc giảm quá mức cho phép, đồng hồ sẽ tự động cảnh báo.

                                - Chức năng theo dõi giấc ngủ sẽ theo dõi quá trình ngủ của bạn, các số liệu từ thời gian ngủ, giai đoạn ngủ như ngủ nông, ngủ sâu, ngủ REM đều được ghi lại và đồng hồ sẽ tổng hợp và đưa ra lời khuyên giúp cải thiện giấc ngủ của bạn.

                                - Tính năng đo nồng độ oxy trong máu (chỉ số SpO2), đo điện tâm đồ nhờ ứng dụng ứng dụng ECG - đây được xem là một thành tựu quan trọng đối với thiết bị thông minh như đồng hồ.

                                Apple Watch Series 7 LTE 41mm dây thép - Chăm sóc sức khoẻ

                                An toàn trong mỗi chuyến đi với tính năng phát hiện té ngã
                                Tính năng này hoàn toàn phù hợp với những người yêu thích việc đạp xe hay leo núi một mình bởi khi phát hiện người sử dụng té ngã, Apple Watch sẽ gửi cảnh báo SOS, nếu không phản hồi trong 15 giây đồng hồ sẽ tự động gọi đến các số liên lạc đã lưu trước đó, giúp bạn tránh được rủi ro hoặc tai nạn bất ngờ.

                                Apple Watch Series 7 LTE 41mm dây thép - Phát hiện té ngã

                                Nghe gọi trực tiếp trên đồng hồ thông qua Bluetooth
                                Đồng hồ được kết nối trực tiếp với Bluetooth v5.0 hoặc wifi vì vậy người dùng không cần dùng đến điện thoại vẫn có thể nhận được các thông báo từ các nền tảng xã hội như (Facebook, Zalo, Viber,...) hoặc nghe gọi trực tiếp nhờ eSim.

                                Rèn luyện sức khỏe mỗi ngày với nhiều bài tập phong phú được tích hợp trong đồng hồ
                                Việc luyện tập của bạn sẽ trở nên chuyên nghiệp và hiệu quả hơn với nhiều bài tập phong phú cùng các chỉ số về cơ thể được thống kê trên Apple Watch S7, bên cạnh đó khả năng định vị GPS của đồng hồ sẽ giúp bạn nắm rõ đường đi đối với các bộ môn như đạp xe, chạy bộ hay leo núi,...

                                Apple Watch Series 7 LTE 41mm dây thép - Chế độ luyện tập

                                Tiện lợi hơn với trợ lý ảo Siri
                                Siri là một trợ lý ảo nổi tiếng của thương hiệu công nghệ Apple, cô có khả năng dịch nhanh hơn 10 ngôn ngữ trên thế giới (chưa có tiếng việt) và nhận diện giọng nói dễ dàng. Bạn chỉ cần cài đặt giọng nói của mình vào đồng hồ là có thể thực hiện một vài tác vụ đơn giản hoặc nghe hướng dẫn chỉ đường. Với Siri, sự trải nghiệm của bạn với đồng hồ sẽ trở nên tiện lợi và thú vị hơn.

                                Apple Watch Series 7 LTE 41mm dây thép - Trợ lý ảo Siri

                                Nhiều tính năng khác chờ bạn khám phá
                                Apple Watch S7 LTE sở hữu nhiều tính năng tiện lợi như: Báo thức, dự báo thời tiết, đếm bước chân, điều khiển chơi nhạc,... hỗ trợ người dùng được nhiều việc trong cuộc sống hằng ngày.

                                Ngoài ra, phiên bản lần này của Apple còn hỗ trợ người sử dụng của mình một kho nhạc khổng lồ với hơn 75 triệu bài hát cho bạn những phút giây thư giản, thoải mái sau khoảng thời gian làm việc và học tập.

                                Apple Watch Series 7 LTE 41mm dây thép - Tính năng khác

                                Nhìn chung ở phiên bản Series 7 lần này, Apple đã tập trung nâng cấp diện tích màn hình, tăng độ hiển thị cùng các tính năng theo dõi sức khỏe, cho người dùng một góc nhìn tổng quan hơn về sức khỏe của bản thân chỉ bằng vài cú chạm.",
                'id_loai_san_pham' => 13,
                'is_open' => 1
            ],
            [
                'ten_san_pham' => 'Apple Watch S6 LTE 44mm viền thép dây cao su xanh dương',
                'slug_san_pham' => 's6-lte-44mm-vien-thep-day-cao-su',
                'so_luong' => 20,
                'gia_ban' => 18990000,
                'gia_khuyen_mai' => 17000000,
                'hinh_anh' => 'https://cdn.tgdd.vn/Products/Images/7077/234523/s6-lte-44mm-vien-nhom-day-cao-su-xanh-thumb-1-600x600.jpg',                'mo_ta_ngan' => "Thiết kế năng động, khỏe khoắn",
                'mo_ta_chi_tiet' => "Apple Watch S6 LTE 44mm viền thép dây cao su xanh dương mang kiểu dáng sang trọng, màu sắc hiện đại, trẻ trung. Nó sở hữu màn hình OLED 1.78 inch cho khả năng hiển thị hình ảnh rực rỡ, sắc nét. Mặt đồng hồ được bảo vệ bởi lớp kính cường lực Sapphire có độ cứng cao, chống trầy xước hiệu quả. Dây đeo silicone có độ đàn hồi tốt, không thấm nước, cho cảm giác êm nhẹ suốt ngày dài.

                                    Apple Watch S6 LTE 44mm viền thép dây cao su xanh dương có thiết kế trẻ trung

                                    Chip Apple S6 cho hiệu năng vượt trội
                                    Mẫu Apple Watch 2020 này được trang bị bộ chip xử lý S6 cho hiệu năng nhanh hơn 20% so với dòng S5, giúp các thao tác của bạn được mượt mà hơn, cho bạn những trải nghiệm tuyệt vời mà không lo giật lag.

                                    Apple Watch S6 LTE 44mm viền thép dây cao su xanh dương có bộ chip S6 cho hiệu năng mạnh mẽ

                                    Hệ điều hành tối ưu WatchOS 7.0
                                    Với hệ điều hành mới này, Apple tối ưu hóa các chế độ luyện tập cùng các tính năng mới như: Family Setup, nhận biết rửa tay, chia sẻ màn hình qua iMessage, Siri dịch nhanh 10 ngôn ngữ, 7 loại mặt đồng hồ mới, fitness,...

                                    Apple Watch S6 LTE 44mm viền thép dây cao su xanh dương có hệ điều hành WatchOS 7.0

                                    Theo dõi sức khỏe tốt hơn với các tính năng mới
                                    Apple Watch S6 được trang bị cảm biến SpO2 giúp theo dõi nồng độ oxy trong máu chỉ trong thời gian 15 giây. Bên cạnh đó, ứng dụng ECG có khả năng tạo ECG tương tự như điện tâm đồ giúp bạn dễ dàng nắm bắt được tình trạng sức khỏe của bản thân.

                                    Apple Watch S6 LTE 44mm viền thép dây cao su xanh dương có hỗ trợ đo SpO2

                                    Màn hình OLED Retina luôn luôn hiển thị
                                    - Đồng hồ sử dụng màn hình OLED cao cấp đạt chuẩn Retina mang đến độ sắc nét chân thực, cho độ sáng ngoài trời hơn 2.5 lần so với dòng cũ S5 mà không gây tốn pin hơn.

                                    - Tính năng màn hình luôn luôn hiển thị (Always-on) cho bạn có thể quan sát thông tin mọi lúc, mọi nơi, tiện lợi cho các bạn làm việc văn phòng bận rộn, khi bạn tập thể dục hay khi đang chạy xe trên đường có thể xem giờ mà không lo bỏ lỡ những thông tin quan trọng.

                                    Apple Watch S6 LTE 44mm viền thép dây cao su xanh dương có màn hình OLED luôn hiển thị

                                    eSim tiện lợi - thoải mái nghe gọi mà không cần điện thoại
                                    Khi được hỗ trợ eSim, bạn thoải mái nghe, gọi một cách độc lập mà không cần phải liên kết với điện thoại. Người dùng dễ dàng nghe gọi hay xem thông báo khi đang chạy xe, tập thể thao mà không cần lấy điện thoại ra.

                                    Xem thêm: Cách kết nối eSIM trên smartwatch

                                    Apple Watch S6 LTE 44mm viền thép dây cao su xanh dương có eSim hiện đại

                                    Sở hữu bộ sưu tập mặt đồng hồ đẹp mắt
                                    Với kho tàng mặt đồng hồ sinh động, nhiều mặt đồng hồ nghệ sĩ mới lạ, bạn thoải mái lựa chọn cho mình một mẫu ưng ý, phù hợp với sở thích và phong cách của mình. Ngoài ra, bạn dễ dàng quản lý, khám phá và chia sẻ mặt đồng hồ mới với những người bạn của mình.

                                    Apple Watch S6 LTE 44mm viền thép dây cao su xanh dương có nhiều mặt đồng hồ đẹp mắt

                                    Thời lượng pin khoảng 1.5 ngày, sạc đầy trong khoảng 2 giờ
                                    Apple Watch Series 6 có viên pin cho bạn dùng trong khoảng 1.5 ngày và chỉ cần 2 giờ để sạc đầy. Người dùng có thể yên tâm mình sử dụng hết ngày dài mà không sạc giữa ngày.

                                    Lưu ý: Thời gian sử dụng pin có thể thay đổi tùy theo mật độ sử dụng của người dùng.

                                    Apple Watch S6 LTE 44mm viền thép dây cao su xanh dương có viên pin sử dụng được trong khoảng 1.5 ngày

                                    Chăm sức sức khỏe người dùng
                                    Apple Watch có các tính năng giúp người dùng theo dõi, nắm bắt và cải thiện sức khỏe của mình như: Theo dõi giấc ngủ, đo nhịp tim, tính lượng calories tiêu thụ, đếm số bước chân, theo dõi nồng độ oxy trong máu,... và nhiều tính năng chăm sóc sức khỏe khác.

                                    Apple Watch S6 LTE 44mm viền thép dây cao su xanh dương theo dõi sức khỏe bạn hàng ngày

                                    Tính năng phát hiện sự cố té ngã
                                    Chiếc đồng hồ thông minh này sẽ gửi tín hiệu khẩn cấp SOS đến số điện thoại đã được cung cấp sẵn nếu phát hiện người dùng đeo đồng hồ bị té ngã và bất động trong vòng 15 giây. Đây là chức năng tuyệt vời giúp bạn chăm sóc các thành viên trong gia đình tốt hơn, đặc biệt là người già và trẻ nhỏ.

                                    Apple Watch S6 LTE 44mm viền thép dây cao su xanh dương có tính năng phát hiện sự cố té ngã

                                    Rèn luyện sức khỏe tốt hơn với nhiều chế độ tập luyện khoa học
                                    Apple Watch S6 được trang bị nhiều bài tập thể thao từ cơ bản đến nâng cao như: Nhảy, cooldown, đạp xe, bơi lội, tập cơ bắp, yoga,... Các số liệu tập luyện sẽ hiển thị ngay trên đồng hồ, giúp người dùng dễ dàng theo dõi và đặt ra mục tiêu luyện tập, nâng cao thành tích và cải thiện sức khỏe của bản thân.

                                    Apple Watch S6 LTE 44mm viền thép dây cao su xanh dương có nhiều chế độ tập luyện

                                    Siri - cô trợ lý ảo tuyệt vời
                                    Với trợ lý Siri, chiếc đồng hồ sẽ giúp bạn làm những việc không tưởng. Bạn có thể làm mọi thứ trên chiếc Apple Watch này mà không cần thao tác bằng tay, thay vào đó bạn chỉ cần sử dụng giọng nói của mình và Siri sẽ giúp bạn thực hiện các tác vụ đó.

                                    Apple Watch S6 LTE 44mm viền thép dây cao su xanh dương có trợ lý ảo Siri

                                    Tính năng Family Setup giúp bạn chăm sóc gia đình tốt hơn
                                    Tính năng Family Setup cho phép nhiều chiếc Apple Watch kết nối với một tài khoản iCloud, hỗ trợ bạn chăm sóc người cao tuổi tốt hơn thông qua chức năng định vị, phát hiện té ngã,... Ngoài ra chiếc đồng hồ này còn có thêm tính năng thanh toán Apple Pay thông qua Apple Watch khi được sự đồng ý của phụ huynh, điều này giúp cho cha mẹ có thể yên tâm và kiểm soát con cái tốt hơn.

                                    Lưu ý: Tính năng này hiện không khả dụng ở Việt Nam.

                                    Apple Watch S6 LTE 44mm viền thép dây cao su xanh dương có tính năng Family Setup

                                    Tắm, bơi ở vùng nước nông với chỉ số chống nước 5 ATM
                                    Đồng hồ có hệ số chống nước 5 ATM - ISO 22810:2010 (Tắm, Bơi vùng nước nông) nên có thể được sử dụng trong các hoạt động dưới mặt nước nông như bơi trong bể hoặc ở biển. Không nên sử dụng khi lặn với bình khí, lướt ván nước hoặc các hoạt động khác liên quan đến nước có tốc độ cao hoặc nhấn chìm dưới mực nước nông. Bật tính năng khóa chống nước trước khi mang sản phẩm đi bơi, đi mưa, không ấn các nút điều chỉnh, không dùng trong phòng tắm hơi, tắm nước nóng.

                                    Apple Việt Nam không bảo hành, đổi trả trong trường hợp sản phẩm bị vào nước.

                                    Xem thêm hướng dẫn sử dụng và cách xử lý sản phẩm khi vào nước tại đây.

                                    Apple Watch S6 LTE 44mm viền thép dây cao su xanh dương có hệ số chống nước 5 ATM

                                    Còn nhiều tính năng tuyệt vời khác
                                    Gồm các tính năng khác như: Nghe nhạc qua tai nghe bluetooth, đếm số bước chân, dự báo thời tiết, đo lượng calories tiêu thụ, tìm điện thoại,...

                                    Apple Watch S6 LTE 44mm viền thép dây cao su xanh dương có nhiều tiện ích khác

                                    Apple Watch S6 LTE 44mm viền thép dây cao su xanh dương ấn tượng với thiết kế trẻ trung, năng động, nó sở hữu màn hình OLED Retina 1.78 inch cho hình ảnh sắc nét cùng lớp kính cường lực Saphire chống trầy tuyệt vời. Sở hữu chip S6 mới tăng hiệu năng 20% so với phiên bản trước cùng hệ điều hành WatchOS 7.0 với nhiều tính năng nổi trội như eSim, Family Setup, đo nồng độ oxy trong máu (SpO2),... Đây hứa hẹn sẽ là một siêu phẩm mang đến cho bạn những trải nghiệm về một cuộc sống tiện nghi, hiện đại.",
                'id_loai_san_pham' => 13,
                'is_open' => 1
            ],
            [
                'ten_san_pham' => 'Bàn phím Razer Cynosa V2 Chroma',
                'slug_san_pham' => 'ban-phim-razer-cynosa-v2-chroma',
                'so_luong' => 20,
                'gia_ban' => 1899000,
                'gia_khuyen_mai' => 1700000,
                'hinh_anh' => 'https://product.hstatic.net/1000129940/product/ban-phim-razer-cynosa-v2-chroma-av-9_5b96c1cf86504ab5afa1522e25b1dcd8_grande.jpg',
                'mo_ta_ngan' => "Thiết kế năng động, khỏe khoắn",
                'mo_ta_chi_tiet' => "Razer Cynosa V2 Chroma là một sản phẩm bàn phím giả cơ đến từ nhà Razer. Với những cải tiến mới so với thế hệ trước thì một chiếc bàn phím 1 đến 2 triệu này có gì thu hút. Hãy cùng GEARVN tìm hiểu chi tiết về sản phẩm này nhé!",
                'id_loai_san_pham' => 11,
                'is_open' => 1
            ],
            [
                'ten_san_pham' => 'Bàn phím Razer Blackwidow Lite',
                'slug_san_pham' => 'razer-blackwidow-lite',
                'so_luong' => 20,
                'gia_ban' => 1899000,
                'gia_khuyen_mai' => 1700000,
                'hinh_anh' => 'https://i0.wp.com/techspace.vn/wp-content/uploads/2021/12/1_03b5ba0959224414baa0127f23d2f501-1.jpg?fit=600%2C600&ssl=1',
                'mo_ta_ngan' => "Thiết kế năng động, khỏe khoắn",
                'mo_ta_chi_tiet' => "Razer Cynosa V2 Chroma là một sản phẩm bàn phím giả cơ đến từ nhà Razer. Với những cải tiến mới so với thế hệ trước thì một chiếc bàn phím 1 đến 2 triệu này có gì thu hút. Hãy cùng GEARVN tìm hiểu chi tiết về sản phẩm này nhé!",
                'id_loai_san_pham' => 11,
                'is_open' => 1
            ],[
                'ten_san_pham' => 'Bàn phím Razer Ornata V2',
                'slug_san_pham' => 'ban-phim-razer-ornata-v2',
                'so_luong' => 20,
                'gia_ban' => 1899000,
                'gia_khuyen_mai' => 1700000,
                'hinh_anh' => 'https://phucanhcdn.com/media/product/45965_key_raz_rz03_03380100_r3m1_e.jpg',
                'mo_ta_ngan' => "Thiết kế năng động, khỏe khoắn",
                'mo_ta_chi_tiet' => "Razer Ornata V2 là một trong số những sản phẩm Gaming Gear đến từ thương
                                hiệu Razer. Sở hữu thiết kế cá tính, hiệu ứng rực rỡ, cảm giác gõ tuyệt vời đã mang đến một chiếc
                                bàn phím giả cơ hoàn hảo trong mọi trận chiến. Nếu bạn đang cần một chiếc bàn phím đồng hành mỗi ngày
                                hãy tham khảo ngay sản phẩm nhà Razer này nhé!",
                'id_loai_san_pham' => 11,
                'is_open' => 1
            ],[
                'ten_san_pham' => 'Bàn phím cơ Razer Huntsman Mini Mercury',
                'slug_san_pham' => 'ban-phim-co-razer-huntsman-mini-mercury',
                'so_luong' => 20,
                'gia_ban' => 1899000,
                'gia_khuyen_mai' => 1700000,
                'hinh_anh' => 'https://i0.wp.com/techspace.vn/wp-content/uploads/2021/12/1_9523f9f4449744c2b0366305d1121de0-1.jpg?fit=600%2C600&ssl=1',
                'mo_ta_ngan' => "Thiết kế năng động, khỏe khoắn",
                'mo_ta_chi_tiet' => "Razer Huntsman Mini là một trong những dòng sản phẩm bàn phím cơ giá rẻ trang bị dây cáp type- C giúp đảm bảo độ
                                    chắc chắn, nó giúp đảm bảo rằng nó vẫn được kết nối an toàn trong khi chơi trò chơi và đặc biệt nó có thể dễ dàng
                                    tháo rời để bạn dễ dàng thuận tiện khi di chuyển khi sử dụng.",
                'id_loai_san_pham' => 11,
                'is_open' => 1
            ],[
                'ten_san_pham' => 'Bàn phím Razer BlackWidow V3 Green Switch Quartz',
                'slug_san_pham' => 'ban-phim-razer-blackwidow-v3-green-switch-quartz',
                'so_luong' => 20,
                'gia_ban' => 1899000,
                'gia_khuyen_mai' => 1700000,
                'hinh_anh' => 'https://phucanhcdn.com/media/product/42276_rz03_03541800_r3m1_ha1s.jpg',
                'mo_ta_ngan' => "Thiết kế năng động, khỏe khoắn",
                'mo_ta_chi_tiet' => "Razer BlackWidow V3 - Green Switch - Quartz là một trong những phiên
                                    bản bàn phím máy tính màu hồng cá tính, được thiết kế để chơi game và đã được tối ưu hóa để mang lại hiệu suất và độ bền cấp chuyên nghiệp. ",
                'id_loai_san_pham' => 11,
                'is_open' => 1
            ],
            [
                'ten_san_pham' => 'Bàn phím Akko 3084SP Oceanstar - Cherry switch',
                'slug_san_pham' => 'ban-phim-akko-3084sp-oceanstar-cherry-switch',
                'so_luong' => 20,
                'gia_ban' => 1500000,
                'gia_khuyen_mai' => 1200000,
                'hinh_anh' => 'https://phucanhcdn.com/media/product/38800_akko_3068sp_oceanstar_ha1.jpg',
                'mo_ta_ngan' => "Nhắc tới Bàn phím Akko 3084SP Oceanstar - Cherry switch là người dùng sẽ nhớ ngay tới sự nhỏ gọn, tiện dụng với khả năng tiết kiệm tối đa không gian tuy nhiên vẫn sở hữu đầy đủ tính năng cần thiết.",
                'mo_ta_chi_tiet' => "Bàn phím Akko 3084SP Oceanstar - Cherry switch
                                    Kich thước tạo nên sự khác biệt
                                    Nhắc tới Bàn phím Akko 3084SP Oceanstar - Cherry switch là người dùng sẽ nhớ ngay tới sự nhỏ gọn, tiện dụng với khả năng tiết kiệm tối đa không gian tuy nhiên vẫn sở hữu đầy đủ tính năng cần thiết.
                                    USB type C: Tiêu chuẩn của tương lai
                                    Bàn phím đi kèm với dây USB type C có thể tháo rời và kết nối với bất kì thiết bị nào hỗ trợ USB type C (không hỗ trợ type C male-to-male) bao gồm PC, laptop, máy tính bảng và điện thoại thông minh.
                                    Keycap bền bỉ
                                    Keycap với thành phần 85% nhựa PBT mang lại độ bền và cảm giác gõ cực tốt, hạn chế bị mài mòn theo thời gian.",
                'id_loai_san_pham' => 10,
                'is_open' => 1
            ],
            [
                'ten_san_pham' => 'Bàn phím cơ AKKO 3061 World Tour Tokyo R2 (Pre-Lubed)',
                'slug_san_pham' => 'ban-phim-co-akko-3061-world-tour-tokyo-r2-pre-lubed',
                'so_luong' => 20,
                'gia_ban' => 1700000,
                'gia_khuyen_mai' => 1500000,
                'hinh_anh' => 'https://hugotech.vn/wp-content/uploads/Ban-phim-co-AKKO-3061-World-Tour-Tokyo-R2-RGB-2-600x600.jpg',
                'mo_ta_ngan' => "Nếu bạn là một người yêu thích xứ sở hoa anh đào chắc hẳn AKKO 3061 World Tour Tokyo R2 (Pre-Lubed) là dành cho bạn. Độc đáo trong thiết kế cùng cảm giác gõ lôi cuốn đã tạo nên một chiếc bàn phím cơ tuyệt vời.",
                'mo_ta_chi_tiet' => "Vẻ ngoài thu hút mọi ánh nhìn từ AKKO 3061 World Tour Tokyo R2 (Pre-Lubed)
                                    Bàn phím cơ nhà Akko có vẻ ngoài được lấy ý tưởng từ ngọn núi Phú Sĩ nổi tiếng tại Nhật Bản kết hợp với hoa anh đào vô cùng đẹp mắt. Giao diện nổi bật với tông màu hồng bao quát đã tạo nên tổng thể bắt mắt, đầy thu hút. Nếu bạn là người ưa chuộng vẻ ngoài hoàn hảo thì sản phẩm này quả thật là lựa chọn sáng suốt.
                                    GEARVN bàn phím cơ AKKO 3061 World Tour Tokyo R2 (Pre-Lubed)
                                    Sử dụng Swicth Gateron mượt mà
                                    Nếu bạn đã từng thử qua các loại Switch Gateron trước đây thì sẽ cảm nhận rõ rệt Switch trang bị cho AKKO 3061 World Tour Tokyo R2 lần này mượt mà hơn hẳn. Âm thanh Switch mang lại vô cùng êm và đầm, mang đến cảm giác gõ chắc chắn. Đảm bảo các tình trạng lỏng lẽo hay keycap bị bung sẽ không còn thấy trên dòng Switch Gateron mới này. Bên cạnh đó tính năng chống bụi tiêu chuẩn IP40 cũng là một điểm cộng cho dòng sản phẩm này.
                                    GEARVN bàn phím cơ AKKO 3061 World Tour Tokyo R2 (Pre-Lubed)
                                    Keycap được làm từ nhựa PBT Dye-Subbed chắc chắn
                                    Nhựa PBT nổi tiếng với hầu hết các sản phẩm Keycap làm nên tên tuổi của nhiều thương hiệu bàn phím cơ. Những gì mang lại từ nhựa PBT vô cùng chắc chắn, bền bỉ. Bên cạnh đó công nghệ dùng nhiệt in Dye-Subbed giúp những ký tự trên từng Keycap không phai. Bộ bàn phím của bạn sẽ luôn trong tình trạng như mới với khả năng chống bám bụi và mô hôi trên từng Keycap.
                                    GEARVN bàn phím cơ AKKO 3061 World Tour Tokyo R2 (Pre-Lubed)
                                    Tối giản trong thiết kế bàn phím Akko
                                    Dù được thiết kế nhỏ gọn nhưng luôn đảm bảo mọi chức năng mang lại tốt nhất. Chiếc bàn phím có kiểu dáng nhỏ gọn giúp bạn di chuyển dễ dàng hơn. Sử dụng ở bất cứ đâu không còn cảm thấy bất tiện khi mang theo nữa.
                                    GEARVN bàn phím cơ AKKO 3061 World Tour Tokyo R2 (Pre-Lubed)
                                    Chế độ đèn RGB rực rỡ
                                    Bản thân bàn phím Akko đã có vẻ ngoài vô cùng thu hút còn được trang bị thêm đèn LED RGB tăng thêm sức hút cho sản phẩm hơn. Bộ đèn RGB bạn có thể tùy chỉnh theo nhiều chế độ yêu thích của bản thân. Trong điều kiện thiếu ánh sáng chiếc bàn phím của bạn sẽ tỏa sáng một cách rực rỡ nhất.
                                    GEARVN bàn phím cơ AKKO 3061 World Tour Tokyo R2 (Pre-Lubed)
                                    AKKO 3061 World Tour Tokyo R2 (Pre-Lubed) mang lại cảm giác gõ phím lôi cuốn với vẻ ngoài đầy thu hút. Với phân khúc giá trung bình bạn đã có thể sở hữu ngay tuyệt phẩm nhà Akko này.",
                'id_loai_san_pham' => 10,
                'is_open' => 1
            ],
            [
                'ten_san_pham' => 'Bàn phím cơ AKKO ACR61 White',
                'slug_san_pham' => 'ban-phim-co-akko-acr61-white',
                'so_luong' => 20,
                'gia_ban' => 2100000,
                'gia_khuyen_mai' => 2000000,
                'hinh_anh' => 'https://phucanhcdn.com/media/product/45955_key_akko_acr61_w_b.jpg',
                'mo_ta_ngan' => "AKKO ACR61 White là một trong những lựa chọn tốt nhất ở phân khúc bàn phím 2 đến 3 triệu trên thị trường hiện nay. Thiết kế TKL nhỏ gọn, phần case đặc biệt kết hợp cùng hiệu ứng đèn LED RGB lan tỏa cho môi trường làm việc trở nên chuyên nghiệp và đầy ấn tượng.",
                'mo_ta_chi_tiet' => "AKKO ACR61 White là một trong những lựa chọn tốt nhất ở phân khúc bàn phím 2 đến 3 triệu trên thị trường hiện nay. Thiết kế TKL nhỏ gọn, phần case đặc biệt kết hợp cùng hiệu ứng đèn LED RGB lan tỏa cho môi trường làm việc trở nên chuyên nghiệp và đầy ấn tượng.
                                    GEARVN bàn phím cơ AKKO ACR61 White
                                    Thiết kế TKL nhỏ gọn
                                    Bàn phím AKKO có thiết kế nhỏ gọn với 61 phím tiết kiệm diện tích trên mặt bàn cũng như thuận lợi cho việc di chuyển. Tạo điều kiện cho những thao tác cùng chuột không dây hoặc có dây được mượt mà hơn. Phần case có màu trắng đục làm từ Acrylic cứng cáp làm bệ đỡ an toàn cho toàn linh kiện của bàn phím.
                                    GEARVN bàn phím cơ AKKO ACR61 White
                                    Đèn LED RGB lan tỏa từ bàn phím AKKO ACR61 White
                                    So với các phiên bản ACR61 Blue / Black / Pink chắc có lẽ màu White có phần case đem lại ánh sáng lan tỏa nhất khi kết hợp cùng hiệu ứng đèn LED RGB. Thiết kế bảng mạch PCB đi viền LED cho ra ánh sáng đèn cực kỳ ấn tượng trên diện rộng. Đem lại không gian hoạt động rực rỡ đa sắc màu đồng thời làm vật trang trí cho góc làm việc của người dùng thêm sinh động.
                                    GEARVN bàn phím cơ AKKO ACR61 White
                                    Sở hữu bộ AKKO CS switch - Jelly White
                                    Switch là thành phần quan trọng mang đếm cảm giác nhấn - nhả khi click của người dùng. Jelly White có lực tác động 35gf ± 5gf chuyển động tuyến tính đem lại phản hồi cực tốt với độ nảy phím ổn định. Bottom được làm bằng Polycabonate và stem chống bụi tốt giảm các tình trạng lung lay switch trong quá trình sử dụng.
                                    GEARVN bàn phím cơ AKKO ACR61 White
                                    Keycap PBT DoubleShot bền bỉ
                                    Nhà AKKO lựa chọn chất liệu PBT để tạo nên độ cứng cáp cũng như sự chắc chắn cho từng keycap của họ. Theo đó họ sử dụng công nghệ in DoubleShot để gia công cho từng ký tự trên phím được bám lâu hơn với độ sắc nét cao. Mang lại mức tin cậy tuyệt đối trong mọi hành trình nhấn phím của người dùng. Kiểu profile ASA cũng không làm mất quá nhiều thời gian để làm quen khi mới sở hữu.
                                    GEARVN bàn phím cơ AKKO ACR61 White
                                    Bàn phím AKKO ACR61 mang lại không gian làm việc chuyên nghiệp hơn với những tính năng hấp dẫn. Đặc biệt phù hợp với những khách hàng khó tính yêu thích sự gọn gàng ngăn nắp tại góc làm việc.",
                'id_loai_san_pham' => 10,
                'is_open' => 1
            ],
            [
                'ten_san_pham' => 'Bàn phím cơ AKKO 3098B Multi-modes Black Gold',
                'slug_san_pham' => 'ban-phim-co-akko-3098b-multi-modes-black-gold',
                'so_luong' => 20,
                'gia_ban' => 25000000,
                'gia_khuyen_mai' => 2200000,
                'hinh_anh' => 'https://phucanhcdn.com/media/product/45754_kec_akko_3098bblackgold_w_f.jpg',
                'mo_ta_ngan' => "Nếu bạn đang cần tìm bàn phím 2 đến 3 triệu để chơi game, học tập hay làm việc, AKKO 3098B Multi-modes Black Gold là một lựa chọn không thể bỏ lỡ. Hãy cùng GEARVN tìm hiểu xem chiếc bàn phím này có gì đáng mua nhé!",
                'mo_ta_chi_tiet' => "Nếu bạn đang cần tìm bàn phím 2 đến 3 triệu để chơi game, học tập hay làm việc, AKKO 3098B Multi-modes Black Gold là một lựa chọn không thể bỏ lỡ. Hãy cùng GEARVN tìm hiểu xem chiếc bàn phím này có gì đáng mua nhé!
                                    GEARVN bàn phím cơ AKKO 3098B Multi-modes Black Gold
                                    Keycap làm từ nhựa PBT Double-Shot
                                    Keycap nhà Akko được đúc từ nhựa PBT cùng công nghệ in Double-Shot bền bỉ đã tạo nên chất lượng cho chiếc bàn phím Akko. Sản phẩm có tính chống bám vân tay, mồ hôi cực tốt giúp cho chiếc bàn phím cơ của bạn luôn trong trạng thái tươi mới. Chưa hết, bạn có thể yên tâm sử dụng lâu dài mà mặt chữ cũng không hề phai đi.
                                    GEARVN bàn phím cơ AKKO 3098B Multi-modes Black GoldAkko thật hào phóng khi tặng kèm 20 keycap giúp bạn có thể tháo lắp tạo cho chiếc bàn phím cơ của chính bạn nổi bật và khác biệt hẳn.
                                    GEARVN bàn phím cơ AKKO 3098B Multi-modes Black Gold
                                    Profile ASA được thiết kế từ chính hãng Akko
                                    ASA Profile là một profile được Akko nghiên cứu và phát triển. ASA sở hữu bộ keycap bầu tròn như đàn anh SA của mình. Tuy nhiên ASA được đánh giá có độ cao vừa phải giúp bạn dễ dàng làm quen hơn, khi gõ cũng cho ra âm thanh cuốn hút hơn.
                                    GEARVN bàn phím cơ AKKO 3098B Multi-modes Black GoldSử dụng Akko CS Switch riêng biệt
                                    Bàn phím cơ  AKKO 3098B Multi-modes Black Gold được trang bị bộ Switch được đầu tư phát triển từ Akko. Switch cho một cảm giác gõ phím độc đáo với chiếc lò xo có biên độ dày hơn Akko Switch v2. Thỏa mãn được đam mê gõ phím cơ của các bạn khi dùng một cách đầy ấn tượng.
                                    GEARVN bàn phím cơ AKKO 3098B Multi-modes Black Gold
                                    LED có hỗ trợ đèn nền RGB nhiều chế độ
                                    Bàn phím Akko được trang bị cho mình bộ đèn nền RGB đẹp mắt. Không gian làm việc của chính bạn sẽ trở nên rực rỡ với bộ đèn này với nhiều chế độ tùy chỉnh khác nhau. Tăng khả năng gõ phím chính xác hơn trong điều kiện thiếu sáng.
                                    GEARVN bàn phím cơ AKKO 3098B Multi-modes Black Gold
                                    Kết nối không dây tiện lợi cùng AKKO 3098B Multi-modes Black Gold
                                    Với mức giá giao động từ 2 đến 3 triệu, bàn phím Akko lại mang đến kết nối đa dạng và tiện lợi. Vừa là bàn phím Bluetooth vừa là bàn phím Wireless. Bạn có thể lựa chọn cho mình kết nối nào cũng đều mang lại một đường truyền vô cùng ổn định. Bên cạnh đó, việc sử dụng kết nối dây vơi Type-C cũng vô cùng dễ dàng trong việc tháo lắp.",
                'id_loai_san_pham' => 10,
                'is_open' => 1
            ],
            [
                'ten_san_pham' => 'Bàn phím AKKO ACR Pro Alice Plus',
                'slug_san_pham' => 'ban-phim-akko-acr-pro-alice-plus',
                'so_luong' => 20,
                'gia_ban' => 3000000,
                'gia_khuyen_mai' => 2900000,
                'hinh_anh' => 'https://smartones.com.vn/wp-content/uploads/2022/05/acr-pro-alice-plus2-600x600-1.jpg',
                'mo_ta_ngan' => "AKKO ACR Pro Alice Plus là một trong những dòng sản phẩm mới nhất tham gia vào bộ siêu tập bàn phím công thái học mà người dùng văn phòng, làm việc học tập và giải trí nên sở hữu.",
                'mo_ta_chi_tiet' => "Nếu bạn đang tìm cho mình một trong những dòng bàn phím có thể sử dụng trong nhiều giờ liền mà không hề gây mõi cổ tay thì Akko ACR Pro Alice Plus là một trong những đến trải nghiệm nhập liệu thoải mái.
                                    Trang bị Keycap ASA profile – Black on White (EN version), PBT Double-Shot là loại keycap đượt phát triển bởi Akko với độ hoàn thiện cao, trải nghiệm tốt, mượt mà. Trong suốt quá trình sử dụng bạn có thể yên tâm vì công nghệ Doubleshot từ Akko vô cùng chắn chắn bảo đảm rằng kí tự sẽ không bao giờ pha tránh tình trạng dùng lâu ngày bị mờ chữ, không nhìn rõ chữ.
                                    Để làm nổi bật góc máy chơi game, làm việc ACR Pro Alice Plus là một trong những dòng bàn phím cơ với thiết kế công thái học được trang bị đèn LED nền RGB với nhiều chế độ sáng khác nhau. Màu sắc của LED trên phím rất tốt, sáng đều và có độ sáng rất cao, nổi bật ngay cả trong điều kiện ánh sáng phòng mạnh.
                                    Sở hữu thiết kế nhỏ gọn, bạn có thể dễ dàng mang theo đi bất kỳ đâu để có cho riêng mình như những dòng bàn phím không dây có trên thị trường để có những trải nghiệm tốt nhất. Người dùng hoàn toàn có thể sử dụng thoải mái với bàn phím thiết kế layout 68 nút bấm với kích thước: 380 x 150 x 21mm cùng trọng lượng ~ 0.84 kg.
                                    Điểm được nhiều người dùng quan tâm đến bên cạnh thiết kế chính là dòng bàn phím sử dụng AKKO CS switch. Dòng switch custom do AKKO phát triển thỏa mãn đam mê trải nghiệm cảm giác gõ phím tốt nhất. Điểm khác biệt lớn nhất giữa AKKO CS switch và AKKO switch v2 là lò xo có biên độ dày hơn của AKKO CS switch hứa hẹn sẽ đem lại trải nghiệm độc đáo và khác biệt cho người dùng.",
                'id_loai_san_pham' => 10,
                'is_open' => 1
            ],
        ]);
    }
}
