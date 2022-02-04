<!ДОКТИП HTML>
<html>
<голова>
    <script src="https://cdn.jsdelivr.net/npm/phaser@3.15.1/dist/phaser-arcade-physics.min.js"></script>
</голова>
<тело>

    <скрипт>
    переменная конфига = {
        тип: Phaser.AUTO,
        ширина: 800,
        высота: 600,
        физика: {
            по умолчанию: «аркада»,
            аркада: {
                гравитация: {г: 200}
            }
        },
        место действия: {
            предварительная загрузка: предварительная загрузка,
            создать: создать
        }
    };

    var game = новый Phaser.Game(config);

    предварительная загрузка функции ()
    {
        this.load.setBaseURL('http://labs.phaser.io');

        this.load.image('небо', 'активы/небо/space3.png');
        this.load.image('логотип', 'активы/спрайты/phaser3-logo.png');
        this.load.image('красный', 'активы/частицы/красный.png');
    }

    функция создать ()
    {
        this.add.image(400, 300, 'небо');

        var частиц = this.add.particles('красный');

        var излучатель = частиц.createEmitter({
            скорость: 100,
            шкала: {начало: 1, конец: 0},
            blendMode: «ДОБАВИТЬ»
        });

        var logo = this.physics.add.image(400, 100, 'логотип');

        logo.setVelocity(100, 200);
        логотип.setBounce(1, 1);
        logo.setCollideWorldBounds(true);

        эмиттер.startFollow (логотип);
    }
    </скрипт>

</тело>
</html>