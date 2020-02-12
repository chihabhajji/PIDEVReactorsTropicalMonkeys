Basic FOSUserBundle boilerplate

c install

s database:create

s schema:update --force

s server:run

# Routes
1.  _wdt                                ANY        ANY      ANY    **/_wdt/{token}**
2.  _profiler_home                      ANY        ANY      ANY    **/_profiler/**
3.  _profiler_search                    ANY        ANY      ANY    **/_profiler/search**
4.  _profiler_search_bar                ANY        ANY      ANY    **/_profiler/search_bar**
5.  _profiler_phpinfo                   ANY        ANY      ANY    **/_profiler/phpinfo**
6.  _profiler_search_results            ANY        ANY      ANY    **/_profiler/{token}/search/results**
7.  _profiler_open_file                 ANY        ANY      ANY    **/_profiler/open**
8.  _profiler                           ANY        ANY      ANY    **/_profiler/{token}**
9.  _profiler_router                    ANY        ANY      ANY    **/_profiler/{token}/router**
10.  _profiler_exception                 ANY        ANY      ANY    **/_profiler/{token}/exception**
11.  _profiler_exception_css             ANY        ANY      ANY    **/_profiler/{token}/exception.css**
12.  _twig_error_test                    ANY        ANY      ANY    **/_error/{code}.{_format}**
13.  association_index                   GET        ANY      ANY    **/association/**
14.  association_new                     GET|HEAD   ANY      ANY    **/association/new**
15.  association_show                    GET        ANY      ANY    **/association/{id}**
16.  association_edit                    GET|HEAD   ANY      ANY    **/association/{id}/edit**
17.  association_delete                  DELETE     ANY      ANY    **/association/{id}**
18.  homepage                            ANY        ANY      ANY    **/**
19.  backend                             ANY        ANY      ANY    **/back**
20.  mission_index                       ANY        ANY      ANY    **/mission/**
21.  mission_new                         ANY        ANY      ANY    **/mission/new**
22.  mission_show                        ANY        ANY      ANY    **/mission/{id}**
23.  mission_edit                        ANY        ANY      ANY    **/mission/{id}/edit**
24.  mission_delete                      ANY        ANY      ANY    **/mission/{id}**
25.  fos_user_security_login             GET|POST   ANY      ANY    **/login**
26.  fos_user_security_check             POST       ANY      ANY    **/login_check**
27.  fos_user_security_logout            GET|POST   ANY      ANY    **/logout**
28.  fos_user_profile_show               GET        ANY      ANY    **/profile/**
29.  fos_user_profile_edit               GET|POST   ANY      ANY    **/profile/edit**
30.  fos_user_registration_register      GET|POST   ANY      ANY    **/register/**
31.  fos_user_registration_check_email   GET        ANY      ANY    **/register/check-email**
32.  fos_user_registration_confirm       GET        ANY      ANY    **/register/confirm/{token}**
33.  fos_user_registration_confirmed     GET        ANY      ANY    **/register/confirmed**
34.  fos_user_resetting_request          GET        ANY      ANY    **/resetting/request**
35.  fos_user_resetting_send_email       POST       ANY      ANY    **/resetting/send-email**
36.  fos_user_resetting_check_email      GET        ANY      ANY    **/resetting/check-email**
37.  fos_user_resetting_reset            GET|POST   ANY      ANY    **/resetting/reset/{token}**
48.  fos_user_change_password            GET|POST   ANY      ANY    **/profile/change-password**
49.  fos_user_group_list                 GET        ANY      ANY    **/association/list**
50.  fos_user_group_new                  GET|POST   ANY      ANY    **/association/new**
51.  fos_user_group_show                 GET        ANY      ANY    **/association/{groupName}**
52.  fos_user_group_edit                 GET|POST   ANY      ANY    **/association/{groupName}/edit**
53.  fos_user_group_delete               GET        ANY      ANY    **/association/{groupName}/delete**