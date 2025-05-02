# 🎤 classroom Live 特設サイト - PHP で構築した地下アイドルライブのウェブサイト

このリポジトリは、2025年5月開催の地下アイドルライブ「classroom Live」の特設ウェブサイトです。

通常、地下アイドルのライブイベントに**専用のウェブサイトが作られることはほとんどありません**。本プロジェクトでは、出演者情報やスケジュール、予約導線を丁寧にまとめることで、**初めて来る人や外部ファンにも分かりやすい設計**を目指しました。

さらに、ソースコードも公開し、エンジニアとして「ライブイベントの情報発信のあり方」を再定義する試みに取り組んでいます。

---

## 🔧 使用技術

- **PHP**
- **HTML / CSS**
- **JavaScript**

主に静的な構成で、共通パーツをPHPのインクルードで管理しています。

---

## 🖥️ サイト概要

- トップページ構成（1ページ完結型）
- 出演者・日時・会場などの基本情報
- 予約リンク（[TIGET](https://tiget.net/)経由）
- GitHub でのコード公開を通じた「イベントのオープンソース化」

実際のサイトはこちら → [https://classroom.yasuo-teacher.com](https://classroom.yasuo-teacher.com)

---

## 📁 ディレクトリ構成

```
/project-root
├— index.php
├— config.php
├— head.php
├— header.php
├— footer.php
├— css/
│   └— main.css
├— js/
│   └— main.js
├— img/
└— README.md
```

---

## 🚀 ローカル動作方法

1. PHP環境【XAMPP, MAMP など】を用意
2. リポジトリをクローン:

   ```bash
   git clone https://github.com/yasuo-teacher/classroom-hp.git
   ```

3. ブラウザで `index.php` にアクセス

---

## 📘 このサイトの目的

- 地下アイドルシーンにおける**Web活用の可能性**を広げる
- 初心者や技術者もアクセスしやすい情報設計
- 「ライブの特設サイトって、こんなのもアリなんだ」というサンプル提示

---

## 📘 ライセンス

MITライセンス ([LICENSE](LICENSE))

---

## 🙌 作成者

**やすお先生**  
ご意見・感想などあれば Issue や Pull Request を歓迎します！