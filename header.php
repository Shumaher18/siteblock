<header>
  <div class="header-affix header-fixed">

    <div class="logo"> <!--Лого-->
      <img src="img/obrezannoelogo.png" width="149px" height="76px"></img>
    </div>

  <div class="search"> <!--Поиск-->
      <form>
      <input id="searchline" type="search" placeholder="ПОИСК...">
      <button type="submit"></button>
    </form>
  </div>

  <div id = "night_day"> <!--Солнце/Луна-->
    <a href="#"><img src="img/sun.png" width="38px" height="38px"></img></a>
    <a href="?name=moonlite"><img src="img/moon.png" width="38px" height="38px"></img></a>
  </div>

  <div class="divmenu"> <!--Меню-->
      <div id="menu">
          <ul>
            <li><a href="?name=main">НОВОСТИ</a></li>
            <li><a href="#addpost" name="modal">ДОБАВИТЬ ПОСТ</a></li>
            <li><a href="javascript:void(0)" data-item="o_nas" onclick="showHide(this)">О НАС</a></li>
            <li><a href="javascript:void(0)" data-item="openModal" onclick="showHide(this)">ВОЙТИ</a>
            </li>
          </ul>
      </div>

      <div id="addpost" class="hidden">
        <form>
        <h1>ДОБАВИТЬ ПОСТ</h1>
          <fieldset id="inputs">
              <input id="title" type="text" placeholder="ТЕМА" autofocus required>
              <textarea rows="15" cols="47" name="text"></textarea>
          </fieldset>
          <fieldset id="actions">
              <input type="submit" id="submit" value="ОПУБЛИКОВАТЬ">
          </fieldset>
        </form>
      </div>

      <div id="o_nas" class="hidden">
        <div id="main_o_nas">
          <h1>О нас</h1>
          <p>Мы - просто компания студентов, которые сделали данную платформу для получения зачета по предмету.</p>
          <p>В разработке принимали участие:</p>
          <ul>
            <li> <p>Пешкес Валерий</p> <a href="https://vk.com/peshkes"><img src="img/vk.png" width="20px" height="20px"></img></a></li>
            <li> <p>Литвяк Виктор</p><a href="https://vk.com/victor.litvyak"><img src="img/vk.png" width="20px" height="20px"></img></a></li>
            <li> <p>Хохлов Алексей</p><a href="https://vk.com/lehka_omg"><img src="img/vk.png" width="20px" height="20px"></img></a></li>
            <li> <p>Кеян Лиана</p><a href="https://vk.com/l.keyan"><img src="img/vk.png" width="20px" height="20px"></img></a></li>
          </ul>
      </div>

      <div id="diskleymer">
        <h4>Дисклеймер</h4>
        <p>Все совпадения с другими сайтами и компаниями случайны. Сайт полностью придуман с 0.</p>
      </div>
      </div>

      <div id="openModal" class="hidden" onblur="showHide('openModal')" tabindex="2">
        <form id="login">
        <h1>Авторизация</h1>
          <fieldset id="inputs">
              <input id="username" type="text" placeholder="ЛОГИН" autofocus required>
              <input id="password" type="password" placeholder="ПАРОЛЬ" required>
          </fieldset>
          <fieldset id="actions">
              <a href="">Забыли пароль?</a><a href="javascript:void(0)" onclick="showHide('registration')">Регистрация</a>
              <input type="submit" id="submit" value="ВОЙТИ">
          </fieldset>
        </form>
      </div>
      <!-- <div id ="registration" class="hidden" onblur="showHide('registration')" tabindex="1">
        efasdfhasfa
      </div> -->
  </div>

</header>
