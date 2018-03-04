<?php require_once('functions.php'); ?>

<div class="modal">
  <button class="modal__close" type="button" name="button">Закрыть</button>

  <h2 class="modal__heading">Добавление задачи</h2>

  <form class="form"  action="index.php" method="post">
    <div class="form__row">
      <label class="form__label" for="name">Название <sup>*</sup></label>
  <?php if(isset($errors['name'])): ?>
      <input class="form__input form__input--error" type="text" name="name" id="name" value="" placeholder="Введите название">
      <p class="form__message">Заполните это поле</p>
    <?php else: ?>
      <input class="form__input" type="text" name="name" id="name" value="" placeholder="Введите название">
    <?php endif; ?>

    </div>

    <div class="form__row">

      <label class="form__label" for="project">Проект <sup>*</sup></label>
  <?php if(isset($errors['project'])): ?>
      <select class="form__input form__input--select form__input--error" name="project" id="project">
        <option value="">Нет</option>
        <option value="1">Входящие</option>
        <option value="2">Учеба</option>
        <option value="3">Работа</option>
        <option value="4">Домашние дела</option>
        <option value="5">Авто</option>
      </select>
      <p class="form__message">Заполните это поле</p>
          <?php else: ?>
        <select class="form__input form__input--select" name="project" id="project">
          <option value="">Нет</option>
        <option value="1">Входящие</option>
        <option value="2">Учеба</option>
        <option value="3">Работа</option>
        <option value="4">Домашние дела</option>
        <option value="5">Авто</option>
      </select>
    <?php endif; ?>

    </div>

    <div class="form__row">
      <label class="form__label" for="date">Дата выполнения</label>

      <input class="form__input form__input--date" type="date" name="date" id="date" value="" placeholder="Введите дату в формате ДД.ММ.ГГГГ">
    </div>

    <div class="form__row">
      <label class="form__label" for="preview">Файл</label>

      <div class="form__input-file">
        <input class="visually-hidden" type="file" name="preview" id="preview" value="">

        <label class="button button--transparent" for="preview">
            <span>Выберите файл</span>
        </label>
      </div>
    </div>

    <div class="form__row form__row--controls">
      <input class="button" type="submit" name="submit" value="Добавить">
    </div>
  </form>
</div>
