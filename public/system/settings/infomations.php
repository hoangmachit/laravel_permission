<?php include "../layouts/after.php"; ?>
<div class="post d-flex flex-column-fluid" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5">
            <div class="card-header">
                <h3 class="card-title fw-bolder">Server Infomations</h3>
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-2">
                        <span>CMS HAWEB</span>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col" id="server_info_box__value--1">
                                1.1.1 </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-2">
                        <span>Hệ điều hành máy chủ</span>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col" id="server_info_box__value--2">
                                Linux da.inet.vn 3.10.0-1160.42.2.el7.x86_64 #1 SMP Tue Sep 7 14:49:57 UTC 2021 x86_64 </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-2">
                        <span>Máy chủ cơ sở dữ liệu</span>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col" id="server_info_box__value--3">
                                MySQL 8.0.26 </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-2">
                        <span>Máy chủ web</span>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col" id="server_info_box__value--4">
                                Apache/2 </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-2">
                        <span>PHP</span>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col" id="server_info_box__value--5">
                                7.4.24 (Core, date, libxml, openssl, pcre, sqlite3, zlib, bcmath, calendar, ctype, curl, dom, hash, fileinfo, filter, ftp, gd, gettext, SPL, iconv, intl, json, mbstring, session, standard, mysqlnd, PDO, pdo_mysql, pdo_sqlite, Phar, posix, Reflection, mysqli, SimpleXML, soap, sockets, sodium, exif, tokenizer, xml, xmlreader, xmlwriter, xsl, zip, cgi-fcgi, psr, phalcon, gmp, redis, imagick, imap, ionCube Loader, Zend OPcache)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-2">
                        <span>User Agent</span>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col" id="server_info_box__value--6">
                                Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36 </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-5">
            <div class="card-header">
                <h3 class="card-title fw-bolder">PHP Infomations</h3>
            </div>
            <div class="card-body">
                <iframe name="php_info" src="/system/settings/phpinfo.php" height="500" frameborder="0" style="width: 100%;"></iframe>
            </div>
        </div>
    </div>
</div>
<?php include "../layouts/before.php"; ?>