-- create table if not exists titles (
-- 	id int unsigned auto_increment primary key,
-- 	FormalTitle_jp varchar(255),
-- 	HiraganaTitle varchar(255),
-- 	KatakanaTitle varchar(255),
-- 	ShortTitle varchar(255),
-- 	FormalTitle_eg varchar(255),
-- 	CapitalTitle varchar(255),
-- 	SmallTitle varchar(255),
--     imageurl varchar(2000),
--     quote varchar(255),
--     quoteurl varchar(2000),
-- 	created datetime default now(),
-- 	modified datetime default now()
-- );

-- create table requesttitles (
-- 	id int unsigned auto_increment primary key,
-- 	RequestTitle varchar(255)
-- );


insert into titles (FormalTitle_jp, HiraganaTitle, KatakanaTitle, ShortTitle, FormalTitle_eg, CapitalTitle, SmallTitle, imageurl, quote, quoteurl) values 
('やはり俺の青春ラブコメはまちがっている。', 'やはりおれのせいしゅんらぶこめはまちがっている。', 'ヤハリオレノセイシュンラブコメハマチガッテイル。', '俺ガイル', 'My Youth Romantic Comedy Is Wrong as I Expected', 'MY YOUTH ROMANTIC COMEDY IS WRONG AS I EXPECTED', 'my youth romantic comedy is wrong as i expected', 'https://notsu08.com/wp-content/uploads/2019/03/D2CFL72WsAANu84.jpg', 'ノツのスローライフ計画', 'https://notsu08.com/oregairu-anime-3ki/' ),
('ワンパンマン', 'わんぱんまん', '', '', 'One Punch Man', 'ONE PUNCH MAN', 'one punch man', 'https://pics.prcm.jp/90ce610d0fd1f/82267146/jpeg/82267146.jpeg', 'プリ画像byGMO', 'https://prcm.jp/album/90ce610d0fd1f/pic/82267146?keyword=%E3%83%AF%E3%83%B3%E3%83%91%E3%83%B3%E3%83%9E%E3%83%B3&page=1' ),
('鬼滅の刃', 'きめつのやいば', 'キメツノヤイバ', '', 'Demon Slayer', 'DEMON SLAYER', 'demon slayer', 'https://www.shonenjump.com/j/img/_news/190218kimetsu_1.jpg', '少年ジャンプ公式サイト', 'https://www.shonenjump.com/j/2019/02/18/190218_kimetsu001.html' ),
('ダンジョンに出会いを求めるのは間違っているだろうか', 'だんじょんにであいをもとめるのはまちがっているだろうか', 'ダンジョンニデアイヲモトメルノハマチガッテイルダロウカ', 'ダンまち', 'Is It Wrong to Try to Pick Up Girls in a Dungeon?', 'IS IT WRONG TO TRY TO PICK UP GIRLS IN A DUNGEON?', 'is it wrong to try to pick up girls in a dungeon?', 'https://akiba-souken.k-img.com/assets/images/article/000/818/t640_818098.jpg', 'アキバ総研', 'https://akiba-souken.com/article/40414/' ),
('進撃の巨人', 'しんげきのきょじん', 'シンゲキノキョジン', '', 'Attack on Titan', 'ATTACK ON TITAN', 'attack on titan', 'https://images-na.ssl-images-amazon.com/images/I/81ly5qLKROL._SL1350_.jpg', 'TVアニメ「進撃の巨人」Season 2', 'https://www.amazon.co.jp/TV%E3%82%A2%E3%83%8B%E3%83%A1%E3%80%8C%E9%80%B2%E6%92%83%E3%81%AE%E5%B7%A8%E4%BA%BA%E3%80%8DSeason-2-Vol-1-Blu-ray-%E6%A2%B6%E8%A3%95%E8%B2%B4/dp/B06XT226DZ'),
('ボボボーボ・ボーボボ', 'ぼぼぼーぼ・ぼーぼぼ', '', '', 'Bobobo-bo Bo-bobo', 'BOBOBO-BO BO-BOBO', 'bobobo-bo bo-bobo', 'https://blog-imgs-80.fc2.com/m/a/n/mangakikou/1438586706449.jpg', 'マンガ中毒', 'https://www.mangajunky.net/blog-entry-6365.html'),
('名探偵コナン', 'めいたんていこなん', 'メイタンテイコナン', 'コナン', 'Detective Conan', 'DETECTIVE CONAN', 'detective conan', 'https://www.conan-movie.jp/img/home2/conan.png', '劇場版名探偵コナン『紺青の拳』', 'https://www.conan-movie.jp/'),
('落第騎士の英雄譚', 'らくだいきしのきゃばるりぃ', 'ラクダイキシノキャバルリィ', '', 'Chivalry of a Failed Knight', 'CHIVALRY OF A FAILED KNIGHT', 'chivalry of a failed knight', 'https://hayabusa.io/abema/programs/174-5_s0_p1/thumb001.q85.w640.h360.q85.x2.v1489740320.webp', 'AbemaTV落第騎士の英雄譚', 'https://abema.tv/channels/midnight-anime/slots/9haApNaqLcXdS7' );
