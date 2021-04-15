<?php

namespace App\Helper;

class Constant{

    public const APP_NAME   = 'Persis Solo';
    public const ISDELETED  = 'isdeleted';

    public const USER_LEVEL_ADMINISTRATOR   = 1;
    public const USER_LEVEL_ADMIN           = 2;
    public const USER_LEVEL_MANAGER         = 3;
    public const USER_LEVEL_KASIR           = 4;
    public const USER_LEVEL_CS              = 5;
    public const USER_LEVEL_INVESTOR        = 6;
    public const USER_LEVEL_ACCOUNTING      = 7;
    public const USER_LEVEL_PEMBELIAN       = 8;
    public const USER_LEVEL_SPV             = 9;

    public const SET_STRUK              = 'SET_STRUK';
    public const STRUK_WEBSITE          = 'Website';
    public const STRUK_INSTAGRAM        = 'Instagram';
    public const STRUK_CUST_CARE        = 'CustCare';
    public const STRUK_APPL_LINK        = 'AppLink';
    public const STRUK_FOOTER           = 'Footer';

    public const TRX_TYPE_STANDART      = 1;
    public const TRX_TYPE_CUSTOM        = 2;
    public const TRX_TYPE_PROMO_ONLY    = 3;

    public const DAY_SENIN          = 1;
    public const DAY_SELASA         = 2;
    public const DAY_RABU           = 3;
    public const DAY_KAMIS          = 4;
    public const DAY_JUMAT          = 5;
    public const DAY_SABTU          = 6;
    public const DAY_MINGGU         = 7;

    public const MENU_LEVEL         = 1;
    public const SUBMENU_LEVEL      = 2;

    public const LEVEL_ADMINISTRATOR = 1;

    public const CATEGORY_TYPE_PRODUCT      = 11;
    public const CATEGORY_TYPE_INGREDIENT   = 12;

    public const PRODUCT_ITEMS_LIBRARY  = 21;
    public const PRODUCT_INGREDIENT     = 22;

    public const INV_PURCHASE_ORDER     = 31;
    public const INV_USAGE              = 32;
    public const INV_TRANSFER           = 33;
    public const INV_ADJUSTMENT         = 34;


    public const PROMO_TYPE_BY_ITEMS       = 81;
    public const PROMO_TYPE_BY_TOTAL       = 82;

    public const PROMO_CUST_NEED_BY_ITEMS       = 41;
    public const PROMO_CUST_NEED_BY_CATEGORIES  = 42;

    public const PROMO_REWARD_FREE_ITEM     = 51;
    public const PROMO_REWARD_DISCOUNT      = 52;

    public const LOYALTY_REDEEM_BY_AMOUNT   = 1;
    public const LOYALTY_REDEEM_BY_PERCENT   = 2;

    public const LOYALTY_BUYING_PRODUCT = 1;
    public const LOYALTY_BUYING_CATEGORY = 2;

    public const LOYALTY_GAIN_POINT_FROM_TOTAL              = 61;
    public const LOYALTY_GAIN_POINT_FROM_BUYING_ITEM        = 62;

    public const LOYALTY_REDEEM_POINT_BY_TOTAL        = 71;
    public const LOYALTY_REDEEM_POINT_BY_ITEMS        = 72;

    public const PAYMENT_METHOD_TYPE_CASH       = "Cash";
    public const PAYMENT_METHOD_TYPE_CASH_REFUND= "CASH_REFUND";
    public const PAYMENT_METHOD_TYPE_CARD       = "Card";
    public const PAYMENT_METHOD_TYPE_EWALLET    = "E-Wallet";
    public const PAYMENT_METHOD_TYPE_EDC        = "EDC";
    public const PAYMENT_METHOD_TYPE_OTHER      = "Other";

    public const OPERATION_AND          = "AND";
    public const OPERATION_OR           = "OR";

    public const MENU_HOME              = "home";
    public const MENU_USERMAN           = "userman";
    public const MENU_USERMAN_USER      = "user-man.user";
    public const MENU_USERMAN_MENU      = "userman.menu";
    public const MENU_USERMAN_KARYAWAN  = "userman.karyawan";
    public const MENU_USERMAN_ABSENSI   = "userman.absensi";
    public const MENU_USERMAN_OUTLET    = "userman.outlet";
    public const MENU_USERMAN_STORE     = "userman.store";
    public const MENU_USERMAN_AKSES     = "userman.akses";

    public const MENU_REPORT            = "report";
    public const MENU_REPORT_SALES      = "report.sales";
    public const MENU_REPORT_TRX        = "report.trx";
    public const MENU_REPORT_INVOICE    = "report.invoice";
    public const MENU_REPORT_SHIFT      = "report.shift";

    public const MENU_DATA              = "data";
    public const MENU_DATA_CUSTOMER     = "data.customer";
    public const MENU_LIBRARY_CATEGORY  = "library.category";
    public const MENU_LIBRARY_PROMO     = "library.promo";
    public const MENU_LIBRARY_DISCOUNT  = "library.diskon";
    public const MENU_LIBRARY_SALESTYPE = "library.salestype";
    public const MENU_LIBRARY_SATUAN    = "library.units";
    public const MENU_LIBRARY_PAYMENT_METHOD    = "library.paymentmethods";


    public const MENU_INGREDIENT         = "ingredient";
    public const MENU_INGREDIENT_LIBRARY = "ingredient.library";
    public const MENU_INGREDIENT_CATEGORY= "ingredient.category";
    public const MENU_INGREDIENT_RECIPE  = "ingredient.recipe";

    public const MENU_INVENTORY         = "inventory";
    public const MENU_INVENTORY_SUMMARY = "inventory.summary";
    public const MENU_INVENTORY_SUPPLIER= "inventory.supplier";
    public const MENU_INVENTORY_PO      = "inventory.po";
    public const MENU_INVENTORY_TRANSFER= "inventory.transfer";
    public const MENU_INVENTORY_ADJUST  = "inventory.adjustment";

    public const MENU_CUST              = "cust";
    public const MENU_CUST_LIST         = "cust.list";
    public const MENU_CUST_FEEDBACK     = "cust.feedback";
    public const MENU_CUST_LOYALTY      = "cust.loyalty";

    public const MENU_SETTING           = "setting";

}
