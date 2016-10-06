Menu:

1)      —оздать пункт меню с адресом training/menu и с заголовком ЂTraining Landing Pageї, пункт меню должен находитьс€ в УNavigationФ меню. ѕункт меню должен быть раскрыт по умолчанию.
2)      ѕри переходе на эту страницу должен отображатьс€ текст ЂThis is the landing page of the Training moduleї
3)      —оздать пункт меню с адресом training/menu/custom_access и с заголовком ЂCustom Access Menu Itemї. ѕункт меню должен быть виден только авторизованным пользовател€м.  –оль Ђauthenticated userї.
4)      —оздать пункт меню с адресом training/menu/permissioned и с заголовком ЂPermissioned Menu Itemї. ѕункт меню должен быть виден только пользовател€м с правом  Ђaccess protected menu exampleї.
5)      —оздать пункт меню с адресом training/menu/callback. Ётот пункт не должен попасть ни в одно меню. Ќа странице должна быть надпись ЂThe menu entry for this page is of type MENU_CALLBACKї
6)      —оздать ѕункты меню с табами. “абы начинаютс€ по адресе training/menu/tabs, заголовок верхнего уровн€ ЂTabsї. Ќа странице должна выводитьс€ надпись ЂThis is the "tabs" menu entryї. ” этого должны быть следующие закладки.
training/menu/tabs/second
training/menu/tabs/third
training/menu/tabs/fourth
 ажда€ закладка должна выводить текст по шаблону
ЂThis is the tab "%name" in the "basic tabs" exampleї где %name Ц second, third, fourth
7)      ¬ первой закладке открываетс€ новый уровень закладок
training/menu/tabs
training/menu/tabs/default/second
training/menu/tabs/default/third
8)      —оздать пункт меню, который может принимать и обрабатывать 2 аргумента.
training/menu/arguments/%1/%2
—ама страница должна печатать эти агрументы
training/menu/arguments/one/two отобразит
Argument 1=one
Argument 2=two
—траница может не принимать параметры.
9)      —оздать страницу с динамическим адресом training/menu/placeholder/%/display.
—траница должна выводить динамический аргумент <div>%</div>
10)   —делать обработчик аргумента. —траница с шаблоном адреса training/menu/default_arg/%
ƒолжна обрабатывать аргумент и выводить его обработанное значение
1 => 'one',
2 => 'two',
3 => 'three',
99 => 'Almost there'
ѕри других значени€х аргумента должна показыватьс€ страница 404.
11)   —оздать страницу по адресу training/menu/title с динамическим заголовком по шаблону УDynamic title: username= %usernameФ. √де %username Ц им€ залогиненого пользовател€, дл€ анонима выводить  anonymous.
12) —оздать пункт меню training/menu/main с заголовком УItem in main menuФ которое будет размещено в главном меню (main-menu)

Themes
1	—оздать пункт меню Уtraining/themeФ, на странице отобразить нумерованны список из ссылок на все страницы проверки тем:
0	theme/list - List
0	theme/table - Table
0	theme/image - image
0	theme/access - Access
«аголовок списка - УLinks to themesФ. 
2	—оздать страницу training/theme/table и отобразить таблицу с 3м€ колонками. 
0	«аголовк таблицы УTheme table sampleФ, айдишник Уtable-testФ. 
0	«аголовки столбцов Уheader 1Ф, Уheader 2Ф, Уheader 3Ф. 
0	” строк должен быть класс УrowClassФ и черестрочное УevenФ-УoddФ. 
0	¬тора€ €чейка должна занимать 2 €чейки.
3	—оздать страницу training/theme/image и отобразить следующие картинки
0	modules/image/sample.png с классом simple-image
0	ѕрименить все доступные стили изображени€ к этой картинке и вывести их списком
4	—оздать страницу training/theme/access и отобразить следующий текст
0	УCustom access for rendered contentФ дл€ пользователей у которых есть право Уaccess protected contentФ.
0	УCustom access inversed for rendered contentФ дл€ пользователей у которых нет права Уaccess protected contentФ.
