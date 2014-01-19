<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="chrome=1" />
  <meta name="viewport" content="width=device-width">
  <link rel="canonical" href="http://pokermon.herokuapp.com" />
  <link rel="icon" href="favicon.ico" />
  <title>Pokermon</title>
  <style>
    body {
      font-size: 14px;
      line-height: 22px;
      font-family: Helvetica Neue, Helvetica, Arial;
      background: #f4f4f4 url(images/background.png);
    }
    .interface {
      font-family: "Lucida Grande", "Lucida Sans Unicode", Helvetica, Arial, sans-serif !important;
    }
    div#sidebar {
      background: #fff;
      position: fixed;
      z-index: 10;
      top: 0; left: 0; bottom: 0;
      width: 200px;
      overflow-y: auto;
      overflow-x: hidden;
      -webkit-overflow-scrolling: touch;
      padding: 15px 0 30px 30px;
      border-right: 1px solid #bbb;
      box-shadow: 0 0 20px #ccc; -webkit-box-shadow: 0 0 20px #ccc; -moz-box-shadow: 0 0 20px #ccc;
    }
      a.toc_title, a.toc_title:visited {
        display: block;
        color: black;
        font-weight: bold;
        margin-top: 15px;
      }
        a.toc_title:hover {
          text-decoration: underline;
        }
        #sidebar .version {
          font-size: 10px;
          font-weight: normal;
        }
      ul.toc_section {
        font-size: 11px;
        line-height: 14px;
        margin: 5px 0 0 0;
        padding-left: 0px;
        list-style-type: none;
        font-family: Lucida Grande;
      }
        .toc_section li {
          cursor: pointer;
          margin: 0 0 3px 0;
        }
          .toc_section li a {
            text-decoration: none;
            color: black;
          }
            .toc_section li a:hover {
              text-decoration: underline;
            }
    div.container {
      position: relative;
      width: 550px;
      margin: 40px 0 50px 260px;
    }
    img#logo {
      width: 450px;
      height: 80px;
    }
    p, div.container ul {
      margin: 25px 0;
      width: 550px;
    }
      p.warning {
        font-size: 12px;
        line-height: 18px;
        font-style: italic;
      }
      div.container ul {
        list-style: circle;
        padding-left: 15px;
        font-size: 13px;
        line-height: 18px;
      }
        div.container ul li {
          margin-bottom: 10px;
        }
        div.container ul.small {
          font-size: 12px;
        }
    a, a:visited {
      color: #444;
    }
    a:active, a:hover {
      color: #000;
    }
    a.punch {
      display: inline-block;
      background: #4162a8;
      border-top: 1px solid #38538c;
      border-right: 1px solid #1f2d4d;
      border-bottom: 1px solid #151e33;
      border-left: 1px solid #1f2d4d;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      -ms-border-radius: 4px;
      -o-border-radius: 4px;
      border-radius: 4px;
      -webkit-box-shadow: inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
      -moz-box-shadow: inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
      -ms-box-shadow: inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
      -o-box-shadow: inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
      box-shadow: inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
      color: #fff;
      font: bold 14px "helvetica neue", helvetica, arial, sans-serif;
      line-height: 1;
      margin-bottom: 15px;
      padding: 8px 0 10px 0;
      text-align: center;
      text-shadow: 0px -1px 1px #1e2d4d;
      text-decoration: none;
      width: 225px;
      -webkit-background-clip: padding-box; }
      a.punch:hover {
        -webkit-box-shadow: inset 0 0px 20px 1px #87adff, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
        -moz-box-shadow: inset 0 0px 20px 1px #87adff, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
        -ms-box-shadow: inset 0 0px 20px 1px #87adff, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
        -o-box-shadow: inset 0 0px 20px 1px #87adff, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
        box-shadow: inset 0 0px 20px 1px #87adff, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
        cursor: pointer; }
      a.punch:active {
        -webkit-box-shadow: inset 0 1px 10px 1px #5c8bee, 0 1px 0 #1d2c4d, 0 2px 0 #1f3053, 0 4px 3px 0 #111111;
        -moz-box-shadow: inset 0 1px 10px 1px #5c8bee, 0 1px 0 #1d2c4d, 0 2px 0 #1f3053, 0 4px 3px 0 #111111;
        -ms-box-shadow: inset 0 1px 10px 1px #5c8bee, 0 1px 0 #1d2c4d, 0 2px 0 #1f3053, 0 4px 3px 0 #111111;
        -o-box-shadow: inset 0 1px 10px 1px #5c8bee, 0 1px 0 #1d2c4d, 0 2px 0 #1f3053, 0 4px 3px 0 #111111;
        box-shadow: inset 0 1px 10px 1px #5c8bee, 0 1px 0 #1d2c4d, 0 2px 0 #1f3053, 0 4px 3px 0 #111111;
        margin-top: 5px; margin-bottom: 10px }
    a img {
      border: 0;
    }
    a.travis-badge {
      display: block;
    }
    h1, h2, h3, h4, h5, h6 {
      padding-top: 20px;
    }
      h2 {
        font-size: 22px;
      }
    b.header {
      font-size: 18px;
      line-height: 35px;
    }
    span.alias {
      font-size: 14px;
      font-style: italic;
      margin-left: 20px;
    }
    table {
      margin: 15px 0 0; padding: 0;
    }
      tr, td {
        margin: 0; padding: 0;
      }
        td {
          padding: 0px 15px 5px 0;
        }
        table .rule {
          height: 1px;
          background: #ccc;
          margin: 5px 0;
        }
    code, pre, tt {
      font-family: Monaco, Consolas, "Lucida Console", monospace;
      font-size: 12px;
      line-height: 18px;
      font-style: normal;
    }
      tt {
        padding: 0px 3px;
        background: #fff;
        border: 1px solid #ddd;
        zoom: 1;
      }
      code {
        margin-left: 20px;
      }
      pre {
        font-size: 12px;
        padding: 2px 0 2px 15px;
        border: 4px solid #bbb; border-top: 0; border-bottom: 0;
        margin: 0px 0 25px;
      }
      img.example_image {
        margin: 0px auto;
      }
        img.example_retina {
          margin: 20px;
          box-shadow: 0 8px 15px rgba(0,0,0,0.4);
        }
    @media only screen and (-webkit-max-device-pixel-ratio: 1) and (max-width: 600px),
           only screen and (max--moz-device-pixel-ratio: 1) and (max-width: 600px) {
      div#sidebar {
        display: none;
      }
      img#logo {
        max-width: 450px;
        width: 100%;
        height: auto;
      }
      div.container {
        width: auto;
        margin-left: 15px;
        margin-right: 15px;
      }
        p, div.container ul {
          width: auto;
        }
    }
    @media only screen and (-webkit-min-device-pixel-ratio: 1.5) and (max-width: 640px),
          only screen and (-o-min-device-pixel-ratio: 3/2) and (max-width: 640px),
          only screen and (min-device-pixel-ratio: 1.5) and (max-width: 640px) {
      img {
        max-width: 100%;
        height: auto;
      }
      div#sidebar {
        -webkit-overflow-scrolling: initial;
        position: relative;
        width: 90%;
        height: 120px;
        left: 0;
        top: -7px;
        padding: 10px 0 10px 30px;
        border: 0;
      }
      img#logo {
        width: auto;
        height: auto;
      }
      div.container {
        margin: 0;
        width: 100%;
      }
      p, div.container ul {
        max-width: 98%;
        overflow-x: scroll;
      }
      table {
        position: relative;
      }
        tr:first-child td {
          padding-bottom: 25px;
        }
        td.text {
          line-height: 12px;
          padding: 0;
          position: absolute;
          left: 0;
          top: 48px;
        }
        tr:last-child td.text {
          top: 122px;
        }
      pre {
        overflow: scroll;
      }
    }
  </style>
</head>
<body>

  <div id="sidebar" class="interface">

    <a class="toc_title" href="#">
      Pokermon <span class="version">(0.1.0)</span>
    </a>
    <ul class="toc_section">
      <li>&raquo; <a href="http://github.com/jacksonrayhamilton/pokermon">GitHub Repository</a></li>
    </ul>

    <a class="toc_title" href="#introduction">
      Introduction
    </a>

   <!-- <a class="toc_title" href="#upgrading">
      Upgrading
    </a>-->

    <a class="toc_title" href="#Getting-Started">
      Getting Started
    </a>
    <ul class="toc_section">
      <li>- <a href="#Getting-Started-Cards-Needed">Cards Needed</a></li>
      <li>- <a href="#Getting-Started-Additional-Things-Needed">Additional Things Needed</a></li>
    </ul>
    
    <a class="toc_title" href="#Decks">
      Decks
    </a>
    <ul class="toc_section">
      <li>- <a href="#Decks-pokemon">Pokemon Decks</a></li>
      <li>- <a href="#Decks-energy">Energy Decks</a></li>
    </ul>

    <!--<a class="toc_title" href="#FAQ">
      F.A.Q.
    </a>
    <ul class="toc_section">
      <li>- <a href="#FAQ-item-1">A question?</a></li>
      <li>- <a href="#FAQ-item-2">Another question?</a></li>
    </ul>-->

    <a class="toc_title" href="#changelog">
      Change Log
    </a>

  </div>

  <div class="container">

    <p>
      <img id="logo" src="images/pokermon.png" alt="Pokermon" />
    </p>

    <p>
      Pokermon is a spin-off of the <b>Pokemon Trading Card Game</b>, using
      the same cards but with rules and objectives loosely based on
      <b>poker</b>. All that's required to play is a shoebox of Pokemon cards,
      a coin and a six-sided die, and two or more people who love Pokemon.
    </p>
    
    <p>
      The project is <a href="http://github.com/jacksonrayhamilton/pokermon/">hosted on GitHub</a>. All rule updates and additions are documented there for players' convenience.
    </p>
    
    <p>
      You can report issues and discuss changes on the
      <a href="http://github.com/jacksonrayhamilton/pokermon/issues">GitHub issues page</a>.
    </p>
    
    <p>
      This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.
      You can modify these rules to your liking and share your changes with
      the world, as long as you allow everyone else to do the same and
      attribute appropriately.
    </p>

    <p>
      <i>
        Pokermon was designed by <a href="http://www.jacksonrayhamilton.com/">Jackson Ray Hamilton</a> and Ryan Baber ("White Oni").
      </i>
    </p>

    <!--<h2 id="downloads">
      Downloads
      <span style="padding-left: 7px; font-size:11px; font-weight: normal;" class="interface">(Right-click, and use "Save As")</span>
    </h2>

    <table>
      <tr>
        <td><a class="punch" href="#">A Button</a></td>
        <td class="text"><i>A description.</i></td>
      </tr>
      <tr>
        <td><a class="punch" href="#">Another Button</a></td>
        <td class="text"><i>Another description.</i></td>
      </tr>
    </table>

    <p>
      More filler text.
    </p>-->

    <h2 id="introduction">Introduction</h2>

    <p>
      <b class="header">What is Pokermon?</b><br />
      <i>Hustle</i> with friends and foes as everyone races to acquire and
      evolve sets of Pokemon, all-the-while trying to thwart their opponents
      at the same task. Pokermon pairs the <b>awesomeness</b> of Pokemon
      with the <b>objectives</b> of poker to create a <i>new</i> card game.
    </p>
    
    <p>
      Players collect sets of Pokemon, each with calculable point values.
      A player who believes he has more points than his opponents can "knock,"
      and 3 rounds after knocking, the player who is proven to have the
      most points wins.
    </p>
    
    <p>
      This website serves as a reference for the standard rules of Pokermon.
      It's important to learn how to play correctly, so you should read this
      site before playing if you're new to the game. Understanding the rules
      will help you make the best use of your cards, so keep this site handy
      on your laptop or smartphone when you first start playing.
    </p>

    <!--<h2 id="upgrading">Upgrading to 0.2.0</h2>

    <p>
      In the future, we'll want to loosely-document changes between versions.
    </p>

    <ul>
      <li>
        An important point to know.
      </li>
      <li>
        Another important tidbit.
      </li>
    </ul>-->

    <h2 id="Getting-Started">Getting Started</h2>

    <p id="Getting-Started-Cards-Needed">
      <b class="header">Cards Needed</b><br />
      Any reasonably-sized shoebox of Pokemon Trading Card Game cards will
      probably suffice for playing Pokermon. However, it's recommended to have:
    </p>
    
    <ul>
      <li><b>Complete "evolution trees"</b> &mdash; Like Charmander, Charmeleon and
      Charizard.</li>
      <li><b>"Legendaries"</b> &mdash; Like Mewtwo, Suicune.</li>
      <li><b><a href="http://bulbapedia.bulbagarden.net/wiki/Energy_card_%28TCG%29">Energies</a></b> &mdash; A few copies of each basic type, and maybe
      a few special types too.</li>
      <li><b><a href="http://bulbapedia.bulbagarden.net/wiki/Trainer_card_%28TCG%29">Trainers</a></b> &mdash; 33% should be Bills, and
      any other combination of Trainers works for the rest.</li>
    </ul>
    
    <p>
      These cards will be assembled into decks, as described in the
      <a href="#Decks">next section</a>.
    </p>
    
    <p>
      If you think you don't have enough cards, you have plenty of options:
    </p>
    
    <ul>
      <li><b>Proxy</b> &mdash; Print and cut-out images of missing cards,
      and place those images on top of real cards inside plastic card sleeves.
      Note that if you use any proxies, <i>all</i> your cards must be
      sleeved. Packs of 50+ card sleeves can be
      purchased at any hobby shop for about $5 each.</li>
      <li><b>One man's trash is another's treasure</b> &mdash; If you check
      your local hobby shop's "commons box," you will probably find almost
      everything you need to play. Cards from these boxes should cost no
      more than $0.10 each.</li>
      <li><b>Pre-constructed decks</b> &mdash; Running at about $10 each
      and available at Wal-Marts and Targets,
      pre-constructed decks contain complete evolution trees and copious
      amounts of Energies and Trainers. 3 or 4 different decks and you
      would have everything needed to play except for Legendaries, which
      can be proxied.</li>
    </ul>
    
    <p id="Getting-Started-Additional-Things-Needed">
      <b class="header">Additional Things Needed</b><br />
      The following things may also be needed or will at least come in handy:
    </p>
    
    <ul>
      <li><b>A coin</b> &mdash; For card effects.</li>
      <li><b>A six-sided die</b> &mdash; For deciding who goes first, and
      card effects.</li>
      <li><b>A calculator</b> &mdash; For adding up points.</li>
      <li><b>A laptop or smartphone</b> &mdash; To reference this site.</li>
    </ul>
    
    <h2 id="Decks">Decks</h2>
    
    <p>
      There are multiple Decks in Pokermon, and each is shared by all players.
    </p>
    
    <p id="Decks-pokemon">
      <b class="header">Pokemon Decks</b><br />
      The Pokemon themselves are sorted into decks corresponding to their
      Types. All Fire Pokemon go in one Deck, all Waters in another, etc.
      Pokemon with multiple Types (i.e. Delta Species) go in a special "Delta"
      Deck.
    </p>
    
    <p>
      Good decks will have multiple complete evolution trees, non-evolving
      Pokemon (like Farfetch'd) and a couple Legendaries (or maybe just 1).
    </p>
    
    <p>
      <b>Dark</b> decks may have lots of Legendaries, as there are many
      Team Rocket prints available of them.
    </p>
    
    <p id="Decks-energy">
      <b class="header">Energy Deck</b><br />
      All Energy cards go in a single deck. For each type of Pokemon Deck
      used, there should be Energy cards corresponding to that Deck's Type.
      Energy cards should also be available in the same or similar quantities.
    </p>
    
    <p>
      Unlike in the Pokemon Trading Card Game, <b>Normal</b> Energy is not a
      "wildcard;" it corresponds to Normal Pokemon only.
    </p>
    
    <p>
      To make things more interesting, <a href="http://bulbapedia.bulbagarden.net/wiki/List_of_Special_Energy_cards">special Energy cards</a> can also be included. <a href="http://bulbapedia.bulbagarden.net/wiki/Rainbow_Energy_%28TCG%29">Rainbow</a>, <a href="http://bulbapedia.bulbagarden.net/wiki/%CE%94_Rainbow_Energy_%28TCG%29">Delta Rainbow</a>, <a href="http://bulbapedia.bulbagarden.net/wiki/Blend_Energy_GFPD_%28TCG%29">Blend GFPD</a> and <a href="http://bulbapedia.bulbagarden.net/wiki/Blend_Energy_WLFM_%28TCG%29">Blend WFLM</a> Energies are recommended.
    </p>

    <!--<h2 id="FAQ">F.A.Q.</h2>

    <p id="FAQ-item-1">
      <b class="header">A question?</b>
      <br />
      The rest of this paragraph is an explanation.
    </p>

    <ul>
      <li>
        A point.
      </li>
      <li>
        Another point.
      </li>
    </ul>

    <p id="FAQ-item-2">
      <b class="header">Another question?</b>
      <br />
      Another explanation.
    </p>
    
    <p>
      A further extrapolation.
    </p>-->

    <h2 id="changelog">Change Log</h2>

    <p>
      <b class="header">0.1.1</b> &mdash; <small><i>Someday in the future</i></small> &mdash; <a href="https://github.com/jacksonrayhamilton/pokermon/compare/0.1.0...0.1.1">Diff</a> &mdash; <a href="http://htmlpreview.github.com/?https://raw.github.com/jacksonrayhamilton/pokermon/0.1.1/index.html">Docs</a><br />
      Second Pokermon release.
    </p>

    <p>
      <b class="header">0.1.0</b> &mdash; <small><i>Jan 18, 2013</i></small> &mdash; <a href="http://htmlpreview.github.com/?https://raw.github.com/jacksonrayhamilton/pokermon/0.1.0/index.html">Docs</a><br />
      Initial Pokermon release.
    </p>
    
    <br />
    <table>
      <tr>
        <td><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a></td>
        <td>This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.</td>
      </tr>
      <tr>
        <td colspan="2"><b>Pokémon © 2002-2014 Pokémon. © 1995-2014 Nintendo/Creatures
        Inc./GAME FREAK inc. TM, ® and Pokémon character names are trademarks
        of Nintendo.</b><br>
        No copyright or trademark infringement is intended in using Pokémon
        content on the Pokermon website.</td>
      </tr>
    </table>

  </div>

</body>
</html>
