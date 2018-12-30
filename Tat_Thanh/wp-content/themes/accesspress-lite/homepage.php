<?php
/*
 * Template Name: Home page
 */
?>
<?php get_header(); ?>
<div class="home">
	<?php echo do_shortcode('[smartslider3 slider=2]'); ?>
	<div class="home-gioi-thieu">
		<h2>Trường tiểu học Nguyễn Tất Thành</h2>
		<p>Hệ thống giáo dục tiểu học Nguyễn Tất Thành  theo đuổi tầm nhìn trở thành giải pháp hiệu quả cho mối quan hệ của phụ huynh và học sinh; là môi trường phát triển vững chắc cho học sinh cả về học vấn, năng khiếu và tính cách, phẩm chất. Trường tiểu học Nguyễn Tất Thành làm điều này thông qua sự kết hợp hài hòa Chương trình Giáo dục Quốc gia với Chương trình Giáo dục Quốc tế, giúp các em sẵn sàng đương đầu với thử thách của cuộc sống cũng như thành công ở những bậc học cao hơn, đồng thời vẫn gìn giữ những giá trị văn hóa, truyền thống của dân tộc.</p>
	</div>
	<div class="home-tin-tuc">
		<h2>TIN TỨC</h2>
		<?php $hts = new WP_Query(array( 'post_type'=>'post',
			'post_status'=>'publish',
			'cat' => 3,
			'orderby' => 'ID',
			'order' => 'DESC',
			'posts_per_page'=> 3));
		?>
		<?php while ($hts->have_posts()) : $hts->the_post(); ?>
		<div class="item-tin-tuc">
			<a href="<?php echo the_permalink(); ?>">
				<?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?>
				<h6><?php echo the_title(); ?></h6>
				<?php echo the_excerpt(); ?>
			</a>
		</div>
		<?php endwhile ; wp_reset_query() ;?>
		
	</div>
		<div class="home-hoat-dong">
		<h2>Hoạt động</h2>
		<?php $hts = new WP_Query(array( 'post_type'=>'post',
			'post_status'=>'publish',
			'cat' => 4,
			'orderby' => 'ID',
			'order' => 'DESC',
			'posts_per_page'=> 3));
		?>
		<?php while ($hts->have_posts()) : $hts->the_post(); ?>
		<div class="item-tin-tuc">
			<a href="<?php echo the_permalink(); ?>">
				<?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?>
				<h6><?php echo the_title(); ?></h6>
				<?php echo the_excerpt(); ?>
			</a>
		</div>
		<?php endwhile ; wp_reset_query() ;?>
		
	</div>
	<div class="home-can-bo">
		<h2>ĐỘI NGŨ CÁN BỘ</h2>
		<div class="item-can-bo">
			<img src="http://localhost/CNPM-Cuoi_Ky/Tat_Thanh/wp-content/uploads/2018/12/49671120_2187736798130921_7671083354711654400_n.png">
			<h6>TS Nguyễn Thiện Vi<br> Tôt trưởng tổKhoa học tự nhiên</h6>
			<ul>
				<li>Thạc sĩ chuyên ngành Toán học tại Trường Đại học Quốc gia Hà Nội</li>
				<li>Chuyên viên phụ trách môn toán học cho Sở Giáo dục & Đào tạo</li>
			</ul>
		</div>
		<div class="item-can-bo" >
			<img src="http://localhost/CNPM-Cuoi_Ky/Tat_Thanh/wp-content/uploads/2018/12/49273731_1132039453617143_2409568582536003584_n.png">
			<h6>TS Lương Bảo Uyên <br> Tổ trưởng tổ Khoa học xã hội</h6>
			<ul>
				<li>Thạc sĩ trường Đại học khoa học Xã hội và Nhân văn</li>
				<li>Thạc sĩ  và Tiến sĩ của trường Đại học Khoa học Tự nhiên</li>
			</ul>
		</div>
		<div class="item-can-bo" >
			<img src="http://localhost/CNPM-Cuoi_Ky/Tat_Thanh/wp-content/uploads/2018/12/48419141_337866520402022_8533872164841979904_n.jpg">
			<h6>TS Lê Nguyễn Như Anh <br>Tổ trưởng tổ Ngoại ngữ</h6>
			<ul>
				<li>Tốt nghiệp loại Giỏi ngành Sư phạm Tiếng Anh - Đại học Sư phạm Hà Nội</li>
				<li>Thạc sĩ Ngôn ngữ học Ứng dụng tại Đại học Curtin (Úc)</li>
			</ul>
		</div>
		<div class="item-can-bo" >
			<img src="http://localhost/CNPM-Cuoi_Ky/Tat_Thanh/wp-content/uploads/2018/12/49204371_2014533758839197_8611549367104438272_n.png">
			<h6>TS Đỗ Tường Phượng <br> Tổ trưởng tổ Kỹ năng ngoại khóa</h6>
			<ul>
				<li>Phó Trưởng phòng GD&ĐT quận Cầu Giấy</li>
				<li>Ban giám khảo của nhiều hoạt động ngoại khóa học sinh sinh viên</li>
			</ul>
		</div>
	</div>
	<div class="gallery">
		<h2>Thư viện ảnh</h2>
		<div class="item-gallery">
			<img src="http://localhost/CNPM-Cuoi_Ky/Tat_Thanh/wp-content/uploads/2018/12/49465045_203793103907366_5216823605941239808_n.jpg">
		</div>
		<div class="item-gallery" >
			<img src="http://localhost/CNPM-Cuoi_Ky/Tat_Thanh/wp-content/uploads/2018/12/49321428_278071116394689_6414492265976168448_n.jpg">
		</div>
		<div class="item-gallery" >
			<img src="http://localhost/CNPM-Cuoi_Ky/Tat_Thanh/wp-content/uploads/2018/12/49143086_1982315771864021_859464342234464256_n.jpg">
		</div>
		<div class="item-gallery" >
			<img src="http://localhost/CNPM-Cuoi_Ky/Tat_Thanh/wp-content/uploads/2018/12/49115054_239787000047809_5450315646107648000_n.jpg">
		</div>
		<div class="item-gallery" >
			<img src="http://localhost/CNPM-Cuoi_Ky/Tat_Thanh/wp-content/uploads/2018/12/49321428_278071116394689_6414492265976168448_n.jpg">
		</div>
		<div class="item-gallery">
			<img src="http://localhost/CNPM-Cuoi_Ky/Tat_Thanh/wp-content/uploads/2018/12/49465045_203793103907366_5216823605941239808_n.jpg">
		</div>
	</div>
</div>
</div>

<?php get_footer(); ?> 