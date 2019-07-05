;(function ($) {
    var tarifValues = {
        0: [
            {
                outFee: '2.9%',
                transactionFee: '0,00 руб.',
                subscribFee: '2990,00 руб./мес.'
            },
            {
                outFee: '2.9%',
                transactionFee: '0,00 руб.',
                subscribFee: '1990,00 руб./мес.'
            },
            {
                outFee: '2.9%',
                transactionFee: '0,00 руб.',
                subscribFee: '990,00 руб./мес.'
            },
            {
                outFee: '2.9%',
                transactionFee: '0,00 руб.',
                subscribFee: '0,00 руб./мес.'
            },
            {
                outFee: '2.8%',
                transactionFee: '0,00 руб.',
                subscribFee: '0,00 руб./мес.'
            },
            {
                outFee: '2.7%',
                transactionFee: '0,00 руб.',
                subscribFee: '0,00 руб./мес.'
            },
            {
                outFee: '2.6%',
                transactionFee: '0,00 руб.',
                subscribFee: '0,00 руб./мес.'
            },
            {
                outFee: '2.5%',
                transactionFee: '0,00 руб.',
                subscribFee: '0,00 руб./мес.'
            },
            {
                outFee: '2.45%',
                transactionFee: '0,00 руб.',
                subscribFee: '0,00 руб./мес.',
            }
        ],

        1: [
            {
                outFee: '1.5%',
                transactionFee: '0,00 руб.',
                subscribFee: '0,00 руб./мес.',
                exclamation: 'При обороте менее 400 000 руб. абонентская плата составит 1990 руб./мес.'
            },
            {
                outFee: '1.4%',
                transactionFee: '0,00 руб.',
                subscribFee: '0,00 руб./мес.'
            },
            {
                outFee: '1.3%',
                transactionFee: '0,00 руб.',
                subscribFee: '0,00 руб./мес.'
            },
            {
                outFee: '1.2%',
                transactionFee: '0,00 руб.',
                subscribFee: '0,00 руб./мес.'
            },
            {
                outFee: '1.1%',
                transactionFee: '0,00 руб.',
                subscribFee: '0,00 руб./мес.'
            }
        ],

        2: [
            {
                outFee: '2.3%',
                transactionFee: '0,00 руб.',
                subscribFee: '0,00 руб./мес.',
                exclamation: 'При обороте менее 400 000 руб. абонентская плата составит 1990 руб./мес.'
            },
            {
                outFee: '2.2%',
                transactionFee: '0,00 руб.',
                subscribFee: '0,00 руб./мес.'
            },
            {
                outFee: '2.1%',
                transactionFee: '0,00 руб.',
                subscribFee: '0,00 руб./мес.'
            },
            {
                outFee: '2.0%',
                transactionFee: '0,00 руб.',
                subscribFee: '0,00 руб./мес.'
            },
            {
                outFee: '1.9%',
                transactionFee: '0,00 руб.',
                subscribFee: '0,00 руб./мес.'
            }
        ],

        3: [
            {
                outFee: '0.8%',
                transactionFee: '0,00 руб.',
                subscribFee: '0,00 руб./мес.',
                exclamation: 'При обороте менее 400 000 руб. абонентская плата составит 1990 руб./мес.'
            },
            {
                outFee: '0.7%',
                transactionFee: '0,00 руб.',
                subscribFee: '0,00 руб./мес.'
            },
            {
                outFee: '0.6%',
                transactionFee: '0,00 руб.',
                subscribFee: '0,00 руб./мес.'
            },
            {
                outFee: '0.5%',
                transactionFee: '0,00 руб.',
                subscribFee: '0,00 руб./мес.'
            },
            {
                outFee: '0.4%',
                transactionFee: '0,00 руб.',
                subscribFee: '0,00 руб./мес.'
            }
        ],

        4: [
            {
                outFee: '2.7%',
                outFee2: '3.2%',
                outFeeText: ' по платежам в валютах: <b>EUR, USD, GBP, PLN, CZK, DKK, NOK, SEK</b>',
                outFeeText2: ' по платежам в валютах: <b>RUB, CHF</b>',
                transactionFee: '0,00 €',
                subscribFee: '0,00 €/мес.',
                exclamation: '* При среднем чеке ниже 25€ взимается дополнительная плата за транзакцию в размере 0,15€.'
            },
            {
                outFee: '2.6%',
                outFee2: '3.1%',
                outFeeText: ' по платежам в валютах: <b>EUR, USD, GBP, PLN, CZK, DKK, NOK, SEK</b>',
                outFeeText2: ' по платежам в валютах: <b>RUB, CHF</b>',
                transactionFee: '0,00 €',
                subscribFee: '0,00 €/мес.',
                exclamation: '* При среднем чеке ниже 25€ взимается дополнительная плата за транзакцию в размере 0,15€.'
            },
            {
                outFee: '2.5%',
                outFee2: '3.0%',
                outFeeText: ' по платежам в валютах: <b>EUR, USD, GBP, PLN, CZK, DKK, NOK, SEK</b>',
                outFeeText2: ' по платежам в валютах: <b>RUB, CHF</b>',
                transactionFee: '0,00 €',
                subscribFee: '0,00 €/мес.',
                exclamation: '* При среднем чеке ниже 25€ взимается дополнительная плата за транзакцию в размере 0,15€.'
            }
        ],

        5: [
            {
                outFee: '2.8%',
                transactionFee: '0,00 тенге',
                subscribFee: '0,00 тенге/мес.'
            },
            {
                outFee: '2.6%',
                transactionFee: '0,00 тенге',
                subscribFee: '0,00 тенге/мес.'
            },
            {
                outFee: '2.5%',
                transactionFee: '0,00 тенге',
                subscribFee: '0,00 тенге/мес.'
            },
            {
                outFee: 'Индивидуальные условия',
                transactionFee: '0,00 тенге',
                subscribFee: '0,00 тенге/мес.'
            }
        ],

        6: [
            {
                outFee: '4%',
                transactionFee: '0,00',
                subscribFee: '0,00'
            }
        ],

        7: [
            {
                outFee: '4.5%',
                transactionFee: '0,30 $',
                subscribFee: '0,00 $/мес.'
            },
            {
                outFee: '4.2%',
                transactionFee: '0,30 $',
                subscribFee: '0,00 $/мес.'
            },
            {
                outFee: '3.8%',
                transactionFee: '0,30 $',
                subscribFee: '0,00 $/мес.'
            }
        ],

        allOptions: [
            'outFee',
            'outFee2',
            'outFeeText',
            'outFeeText2',
            'transactionFee',
            'subscribFee',
            'exclamation'
        ]
    };

    $(document).ready(function () {

        var $calculatorBtn  = $('.js-calculator, .calculator'),
            $calcForm       = $('.calculator-form'),
            $columnLeft     = $calcForm.find('.column-left'),
            $columnRight    = $calcForm.find('.column-right'),
            $selectsLeft    = $columnLeft.find('.calc-select'),
            $selectsRight   = $columnRight.find('.calc-select'),
            $countryInput   = $('.country-selector input'),
            $calcRatesBlock = $('.calc_rates_block'),
            $calcLink       = $('#calcLink');

        $calcForm.find('.calc-select select').coreUISelect();

        $calculatorBtn.click(function () {
            showCalc();
        });

        $(".calculator-form .close, .calculator-blur").click(function () {
            hideCalc();
        });

        $countryInput.change(function () {
            $selectsLeft.toggleClass('active');
            $calcRatesBlock.toggleClass('active');
            setRightSelect($columnLeft.find('.calc-select.active select').val());
        });

        $selectsLeft.change(function () {
            setRightSelect($columnLeft.find('.calc-select.active select').val());
        });

        $calcLink.click(function () {
            calc($columnLeft.find('.calc-select.active select').val(), $columnRight.find('.calc-select.active select').val());

            $('.calc_results').show();
            $('.calc_rates').hide();

            $('.fee_calc').fadeOut(function () {
                $('.feeResults').fadeIn();
            });
        });

        $('#recalculate').click(function () {
            $('.feeResults').fadeOut(function () {
                $('.fee_calc').fadeIn();
            });

            return false;
        });

        $('#show_rates').click(function () {
            var $activeRatesBlock = $('.calc_rates_block.active'),
                $tabs = $activeRatesBlock.find('.rate-item'),
                $tables = $activeRatesBlock.find('.calc-table-item'),
                tabIndex = $columnLeft.find('.calc-select.active select option:selected').attr('data-tab'),
                $activeTab = $tabs.eq(tabIndex),
                $activeTable = $tables.eq(tabIndex);

            $tabs.removeClass('active');
            $tables.removeClass('active');

            $activeTab.addClass('active');
            $activeTable.addClass('active');

            $('.calc_results').fadeOut(function () {
                $('.calc_rates').fadeIn();
            });

            return false;
        });

        $('.rate-item').click(function () {
            var $this = $(this),
                $tabs = $this.parents('.calc_rates_block').find('.rate-item'),
                $tables = $this.parents('.calc_rates_block').find('.calc-table-item');

            $tabs.removeClass('active');
            $tables.removeClass('active');

            $this.addClass('active');
            $tables.eq($tabs.index($this)).addClass('active');
        });

        function showCalc() {
            $(".calculator-block").show();
            $("#slides").slides("stop");
            $("body,div.parallax.inner,div.parallax.outer").removeClass("parallax-enabled");
            $("body").addClass("blured");

            return false;
        }

        function hideCalc() {
            $(".calculator-block").hide();
            $("body").removeClass("blured");
            $("body,div.parallax.inner,div.parallax.outer").addClass("parallax-enabled");
            $("#slides").slides("play");

            return false;
        }

        function setRightSelect(leftSelectValue) {
            $selectsRight.removeClass('active');
            $selectsRight.eq(leftSelectValue).addClass('active');
        }

        function calc(leftValue, rightValue) {
            rightValue = rightValue || 0;

            tarifValues.allOptions.forEach(function (item, i, arr) {
                var value = tarifValues[leftValue][rightValue][item];

                if (value) {
                    $('#' + item).html(value);
                } else {
                    $('#' + item).html('');
                }
            });
        }
    });
})(jQuery);
