<?php

return array(
	'user'=>'用户',
	'forum'=>'版块',
	'post'=>'帖子',
	'plugin'=>'插件',
	'other'=>'其他',
	
	'user_admin'=>'用户管理',
	'forum_admin'=>'版块管理',
	'post_admin'=>'帖子管理',
	'plugin_admin'=>'插件管理',
	'other_admin'=>'其他管理',
	
	'admin_index_page'=>'后台',
	'front_index_page'=>'前台',
	'admin_site_setting'=>'站点设置',
	'admin_setting_base'=>'基本设置',
	'admin_setting_smtp'=>'SMTP 设置',
	
	'admin_user_list'=>'用户列表',
	'admin_user_group'=>'用户组',
	'admin_user_create'=>'创建用户',
	'admin_plugin_local_list'=>'本地插件',
	'admin_plugin_official_list'=>'官方插件',
	
	'admin_token_error'=>'管理令牌错误',
	'admin_token_expiry'=>'管理登陆令牌失效，请重新登录',
	'forum_edit'=>'版块编辑',
	'user_edit'=>'用户编辑',
	'edit_sucessfully'=>'编辑成功',
	'item_not_exists'=>'{item} 不存在',
	'item_not_moderator'=>'{item} 不是版主',
	'group_not_exists'=>'用户组不存在',
	
	'admin_login'=>'管理登陆',
	'save_conf_failed'=>'保存数据到配置文件 {file} 失败，请检查文件的可写权限',
	'user_already_exists'=>'用户已经存在',
	'email_already_exists'=>'用户已经存在',
	'uid_not_exists'=>'指定的 UID 不存在',
	'data_not_changed'=>'没有数据变动',
	'admin_cant_be_deleted'=>'不能直接删除管理员，请先编辑为普通用户组',
	
	
	// 版块
	'forum_list'=>'版块列表',
	'forum_id'=>'版块 ID',
	'forum_icon'=>'图标',
	'forum_name'=>'名称',
	'forum_rank'=>'排序',
	'forum_edit'=>'编辑',
	'forum_delete'=>'删除',
	'forum_brief'=>'简介',
	'forum_announcement'=>'公告',
	'moderator'=>'版主',
	'add_new_line'=>'增加一行',
	'forum_edit_tip'=>'请谨慎编辑版块，一旦确定后不要轻易变动，否则可能会导致数据关联错误，一般在正式运营时就不要再变动。',
	'forum_cant_delete_system_reserved'=>'请谨慎编辑版块，一旦确定后不要轻易变动，否则可能会导致数据关联错误，一般在正式运营时就不要再变动。',
	'forum_moduid_format_tips'=>'最多允许10个，逗号隔开，如：123,456,789',
	'user_privilege'=>'用户权限',
	'allow_view'=>'允许看帖',
	'allow_thread'=>'发主题',
	'allow_post'=>'回贴',
	'allow_upload'=>'上传',
	'allow_download'=>'下载',
	
	
	// 插件
	'local_plugin'=>'本地插件',
	'official_plugin'=>'官方插件',
	'pugin_cate_0'=>'所有插件',
	'pugin_cate_1'=>'风格模板',
	'pugin_cate_2'=>'小型插件',
	'pugin_cate_3'=>'大型插件',
	'pugin_cate_4'=>'接口整合',
	'pugin_cate_99'=>'未分类',
	'plugin_detail'=>'插件详情',
	'plugin_not_exists'=>'插件不存在',
	'plugin_versio_not_match'=>'此插件依赖的 Xiuno BBS 最低版本为 {bbs_version} ，您当前的版本：{version}',
	'plugin_download_sucessfully'=>'下载插件 ({dir}) 成功，请点击进行安装',
	'plugin_install_sucessfully'=>'安装插件 ( {name} ) 成功',
	'plugin_unstall_sucessfully'=>'卸载插件 ( {name} ) 成功，要彻底删除插件，请手工删除 {dir} 目录',
	'plugin_enable_sucessfully'=>'启用插件 ( {name} ) 成功',
	'plugin_disable_sucessfully'=>'禁用插件 ( {name} ) 成功',
	'plugin_upgrade_sucessfully'=>'升级插件 ( {name} ) 成功',
	'plugin_not_need_update'=>'已经是最新版本，无需更新',
	'plugin_set_relatied_dir_writable'=>'在安装插件目录期间，请设置：{dir} 和文件为可写',
	'plugin_dependency_following'=>'( {name} ) 依赖以下插件：{s}，请先安装依赖的插件',
	'plugin_being_dependent_cant_delete'=>'以下插件依赖 ( {name} )：{s}，不能删除 ( {name} )',
	'server_response_empty'=>'服务器返回数据为空',
	'server_response_error'=>'服务器返回数据有错',
	'zip_data_error'=>'压缩包数据有误',
	'format_maybe_error'=>'格式可能不正确',
	'plugin_maybe_download_failed'=>'插件可能下载失败，目录不存在:',
	'plugin_name_error'=>'插件名不合法',
	
	
	
	
);

?>