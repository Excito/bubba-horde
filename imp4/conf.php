<?php
/* CONFIG START. DO NOT CHANGE ANYTHING IN OR AFTER THIS LINE. */
// $Horde: imp/config/conf.xml,v 1.53.2.39 2008/09/03 18:56:45 slusarz Exp $
$conf['spell']['driver'] = 'aspell';
$conf['utils']['gnupg_keyserver'] = array('pgp.mit.edu');
$conf['utils']['gnupg_timeout'] = 10;
$conf['menu']['apps'] = array();
$conf['user']['select_sentmail_folder'] = false;
$conf['user']['allow_resume_all_in_drafts'] = false;
$conf['user']['allow_folders'] = true;
$conf['user']['allow_resume_all'] = false;
$conf['user']['allow_view_source'] = true;
$conf['user']['alternate_login'] = false;
$conf['user']['redirect_on_logout'] = false;
$conf['user']['force_view'] = 'dimp';
$conf['user']['select_view'] = false;
$conf['server']['change_server'] = false;
$conf['server']['change_port'] = false;
$conf['server']['change_protocol'] = false;
$conf['server']['change_smtphost'] = false;
$conf['server']['change_smtpport'] = false;
$conf['server']['server_list'] = 'none';
$conf['server']['fixed_folders'] = array();
$conf['server']['sort_limit'] = 0;
$conf['server']['cache_folders'] = true;
$conf['server']['token_lifetime'] = 1800;
$conf['server']['cachejsparams']['lifetime'] = 86400;
$conf['server']['cachejs'] = 'horde_cache';
$conf['server']['cachecssparams']['lifetime'] = 86400;
$conf['server']['cachecss'] = 'horde_cache';
$conf['mailbox']['show_preview'] = false;
$conf['fetchmail']['show_account_colors'] = false;
$conf['fetchmail']['size_limit'] = 4000000;
$conf['msgcache']['use_compress'] = false;
$conf['msgcache']['preview_size'] = 1000;
$conf['msgcache']['lifetime'] = 2592000;
$conf['msgcache']['use_msgcache'] = true;
$conf['mlistcache']['lifetime'] = 604800;
$conf['mlistcache']['use_mlistcache'] = true;
$conf['msgsettings']['filtering']['words'] = './config/filter.txt';
$conf['msgsettings']['filtering']['replacement'] = '****';
$conf['spam']['reporting'] = false;
$conf['notspam']['reporting'] = false;
$conf['print']['add_printedby'] = false;
$conf['msg']['prepend_header'] = true;
$conf['msg']['append_trailer'] = false;
$conf['compose']['allow_receipts'] = true;
$conf['compose']['special_characters'] = true;
$conf['compose']['use_vfs'] = false;
$conf['compose']['link_all_attachments'] = false;
$conf['compose']['link_attachments_notify'] = false;
$conf['compose']['link_attachments'] = true;
$conf['compose']['attach_size_limit'] = 0;
$conf['compose']['attach_count_limit'] = 0;
$conf['compose']['reply_limit'] = 200000;
$conf['hooks']['vinfo'] = false;
$conf['hooks']['postlogin'] = false;
$conf['hooks']['postsent'] = false;
$conf['hooks']['signature'] = false;
$conf['hooks']['trailer'] = false;
$conf['hooks']['fetchmail_filter'] = false;
$conf['hooks']['mbox_redirect'] = false;
$conf['hooks']['mbox_icon'] = false;
$conf['hooks']['spam_bounce'] = false;
$conf['hooks']['msglist_format'] = false;
$conf['maillog']['use_maillog'] = true;
$conf['sentmail']['driver'] = 'none';
$conf['tasklist']['use_tasklist'] = false;
$conf['notepad']['use_notepad'] = false;
/* CONFIG END. DO NOT CHANGE ANYTHING IN OR BEFORE THIS LINE. */
