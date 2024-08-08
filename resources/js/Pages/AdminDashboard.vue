<script setup>
    import {
        CircleUser,
        Copy,
        CreditCard,
        File,
        Home,
        LineChart,
        ListFilter,
        MoreVertical,
        Package,
        Package2,
        PanelLeft,
        Search,
        Settings,
        ShoppingCart,
        Truck,
        Users2,
    } from "lucide-vue-next";

    import { Badge } from "@/Components/ui/badge";
    import { Button } from "@/Components/ui/button";
    import {
        Card,
        CardContent,
        CardDescription,
        CardFooter,
        CardHeader,
        CardTitle,
    } from "@/Components/ui/card";
    import {
        DropdownMenu,
        DropdownMenuContent,
        DropdownMenuItem,
        DropdownMenuLabel,
        DropdownMenuSeparator,
        DropdownMenuTrigger,
    } from "@/Components/ui/dropdown-menu";
    import { Input } from "@/Components/ui/input";
    import {
        Breadcrumb,
        BreadcrumbItem,
        BreadcrumbLink,
        BreadcrumbList,
        BreadcrumbPage,
        BreadcrumbSeparator,
    } from "@/Components/ui/breadcrumb";
    import { Sheet, SheetContent, SheetTrigger } from "@/Components/ui/sheet";
    import {
        Pagination,
        PaginationList,
        PaginationNext,
        PaginationPrev,
    } from "@/Components/ui/pagination";
    import { Progress } from "@/Components/ui/progress";
    import { Separator } from "@/Components/ui/separator";
    import {
        Table,
        TableBody,
        TableCell,
        TableHead,
        TableHeader,
        TableRow,
    } from "@/Components/ui/table";
    import { Tabs, TabsContent, TabsList, TabsTrigger } from "@/Components/ui/tabs";
    import {
        Tooltip,
        TooltipContent,
        TooltipProvider,
        TooltipTrigger,
    } from "@/Components/ui/tooltip";
    import { Checkbox } from "@/Components/ui/checkbox";
    import AdminLayout from "@/Layouts/AdminLayout.vue";
    import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Dashboard" />

    <AdminLayout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
            >
                Dashboard
            </h2>
        </template>

        <div class="flex flex-col sm:gap-4 sm:py-4">
            <header
                class="sticky top-0 z-30 flex h-14 items-center gap-4 border-b bg-background px-4 sm:static sm:h-auto sm:border-0 sm:bg-transparent sm:px-6"
            >
                <Breadcrumb class="hidden md:flex">
                    <BreadcrumbList>
                        <BreadcrumbItem>
                            <BreadcrumbLink as-child>
                                <a href="#">Accueil</a>
                            </BreadcrumbLink>
                        </BreadcrumbItem>
                        <BreadcrumbSeparator />
                        <BreadcrumbItem>
                            <BreadcrumbLink as-child>
                                <a href="#">Requetes</a>
                            </BreadcrumbLink>
                        </BreadcrumbItem>
                        <BreadcrumbSeparator />
                        <BreadcrumbItem>
                            <BreadcrumbPage>Requetes récentes</BreadcrumbPage>
                        </BreadcrumbItem>
                    </BreadcrumbList>
                </Breadcrumb>
            </header>
            <main
                class="grid flex-1 items-start gap-4 p-4 sm:px-6 sm:py-0 md:gap-8 lg:grid-cols-2 xl:grid-cols-2"
            >
                <div
                    class="grid auto-rows-max items-start gap-4 md:gap-8 lg:col-span-2"
                >
                    <div
                        class="grid gap-4 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-2 xl:grid-cols-4"
                    >
                        <Card class="sm:col-span-2">
                            <CardHeader class="pb-3">
                                <CardTitle>Your Orders</CardTitle>
                                <CardDescription
                                    class="max-w-lg text-balance leading-relaxed"
                                >
                                    Introducing Our Dynamic Orders Dashboard for
                                    Seamless Management and Insightful Analysis.
                                </CardDescription>
                            </CardHeader>
                            <CardFooter>
                                <Button>Create New Order</Button>
                            </CardFooter>
                        </Card>
                        <Card>
                            <CardHeader class="pb-2">
                                <CardDescription>Cette Semaine</CardDescription>
                                <CardTitle class="text-4xl"> 32 </CardTitle>
                            </CardHeader>
                            <CardContent>
                                <div class="text-xs text-muted-foreground">
                                    +25% par rapport à la semaine dernière
                                </div>
                            </CardContent>
                            <CardFooter>
                                <Progress
                                    :model-value="25"
                                    aria-label="25% increase"
                                />
                            </CardFooter>
                        </Card>
                        <Card>
                            <CardHeader class="pb-2">
                                <CardDescription>Ce Mois</CardDescription>
                                <CardTitle class="text-3xl"> 312 </CardTitle>
                            </CardHeader>
                            <CardContent>
                                <div class="text-xs text-muted-foreground">
                                    +10% par rapport au mois précédent
                                </div>
                            </CardContent>
                            <CardFooter>
                                <Progress
                                    :model-value="12"
                                    aria-label="12% increase"
                                />
                            </CardFooter>
                        </Card>
                    </div>
                    <Tabs default-value="week">
                        <div class="flex items-center">
                            <TabsList>
                                <TabsTrigger value="week">
                                    Semaine
                                </TabsTrigger>
                                <TabsTrigger value="month"> Mois </TabsTrigger>
                                <TabsTrigger value="year"> Année </TabsTrigger>
                            </TabsList>
                            <div class="ml-auto flex items-center gap-2">
                                <DropdownMenu>
                                    <DropdownMenuTrigger as-child>
                                        <Button
                                            variant="outline"
                                            size="sm"
                                            class="h-7 gap-1 rounded-md px-3"
                                        >
                                            <ListFilter class="h-3.5 w-3.5" />
                                            <span class="sr-only sm:not-sr-only"
                                                >Filtrer</span
                                            >
                                        </Button>
                                    </DropdownMenuTrigger>
                                    <DropdownMenuContent align="end">
                                        <DropdownMenuLabel
                                            >Filtrer par</DropdownMenuLabel
                                        >
                                        <DropdownMenuSeparator />
                                        <DropdownMenuItem>
                                            <div
                                                class="items-top flex space-x-2"
                                            >
                                                <Checkbox id="terms1" />
                                                <label
                                                    for="terms2"
                                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                                >
                                                    OK
                                                </label>
                                            </div>
                                        </DropdownMenuItem>
                                        <DropdownMenuItem>
                                            <div
                                                class="items-top flex space-x-2"
                                            >
                                                <Checkbox id="terms1" />
                                                <label
                                                    for="terms2"
                                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                                >
                                                    PAS OK
                                                </label>
                                            </div>
                                        </DropdownMenuItem>
                                        <DropdownMenuItem>
                                            <div
                                                class="items-top flex space-x-2"
                                            >
                                                <Checkbox id="terms1" />
                                                <label
                                                    for="terms2"
                                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                                >
                                                    Demande d'informationed
                                                </label>
                                            </div>
                                        </DropdownMenuItem>
                                    </DropdownMenuContent>
                                </DropdownMenu>
                                <Button
                                    variant="outline"
                                    size="sm"
                                    class="h-7 gap-1 rounded-md px-3"
                                >
                                    <File class="h-3.5 w-3.5" />
                                    <span class="sr-only sm:not-sr-only"
                                        >Exporter</span
                                    >
                                </Button>
                            </div>
                        </div>
                        <TabsContent value="week">
                            <Card>
                                <CardHeader class="px-7">
                                    <CardTitle>Requetes</CardTitle>
                                    <CardDescription>
                                        Requetes reçues
                                    </CardDescription>
                                </CardHeader>
                                <CardContent>
                                    <Table>
                                        <TableHeader>
                                            <TableRow>
                                                <TableHead>Client</TableHead>
                                                <TableHead
                                                    class="hidden sm:table-cell"
                                                >
                                                    Type
                                                </TableHead>
                                                <TableHead
                                                    class="hidden sm:table-cell"
                                                >
                                                    Status
                                                </TableHead>
                                                <TableHead
                                                    class="hidden md:table-cell"
                                                >
                                                    Date
                                                </TableHead>
                                                <TableHead class="text-right">
                                                    Amount
                                                </TableHead>
                                            </TableRow>
                                        </TableHeader>
                                        <TableBody>
                                            <TableRow class="bg-accent">
                                                <TableCell>
                                                    <div class="font-medium">
                                                        Liam Johnson
                                                    </div>
                                                    <div
                                                        class="hidden text-sm text-muted-foreground md:inline"
                                                    >
                                                        liam@example.com
                                                    </div>
                                                </TableCell>
                                                <TableCell
                                                    class="hidden sm:table-cell"
                                                >
                                                    Réclammation
                                                </TableCell>
                                                <TableCell
                                                    class="hidden sm:table-cell"
                                                >
                                                    <Badge
                                                        class="text-xs"
                                                        variant="secondary"
                                                    >
                                                        OK
                                                    </Badge>
                                                </TableCell>
                                                <TableCell
                                                    class="hidden md:table-cell"
                                                >
                                                    2023-06-23
                                                </TableCell>
                                                <TableCell class="text-right">
                                                    $250.00
                                                </TableCell>
                                            </TableRow>
                                            <TableRow>
                                                <TableCell>
                                                    <div class="font-medium">
                                                        Olivia Smith
                                                    </div>
                                                    <div
                                                        class="hidden text-sm text-muted-foreground md:inline"
                                                    >
                                                        olivia@example.com
                                                    </div>
                                                </TableCell>
                                                <TableCell
                                                    class="hidden sm:table-cell"
                                                >
                                                    Demande d'information
                                                </TableCell>
                                                <TableCell
                                                    class="hidden sm:table-cell"
                                                >
                                                    <Badge
                                                        class="text-xs"
                                                        variant="outline"
                                                    >
                                                        PAS OK
                                                    </Badge>
                                                </TableCell>
                                                <TableCell
                                                    class="hidden md:table-cell"
                                                >
                                                    2023-06-24
                                                </TableCell>
                                                <TableCell class="text-right">
                                                    $150.00
                                                </TableCell>
                                            </TableRow>
                                            <TableRow>
                                                <TableCell>
                                                    <div class="font-medium">
                                                        Noah Williams
                                                    </div>
                                                    <div
                                                        class="hidden text-sm text-muted-foreground md:inline"
                                                    >
                                                        noah@example.com
                                                    </div>
                                                </TableCell>
                                                <TableCell
                                                    class="hidden sm:table-cell"
                                                >
                                                    Autres
                                                </TableCell>
                                                <TableCell
                                                    class="hidden sm:table-cell"
                                                >
                                                    <Badge
                                                        class="text-xs"
                                                        variant="secondary"
                                                    >
                                                        OK
                                                    </Badge>
                                                </TableCell>
                                                <TableCell
                                                    class="hidden md:table-cell"
                                                >
                                                    2023-06-25
                                                </TableCell>
                                                <TableCell class="text-right">
                                                    $350.00
                                                </TableCell>
                                            </TableRow>
                                            <TableRow>
                                                <TableCell>
                                                    <div class="font-medium">
                                                        Emma Brown
                                                    </div>
                                                    <div
                                                        class="hidden text-sm text-muted-foreground md:inline"
                                                    >
                                                        emma@example.com
                                                    </div>
                                                </TableCell>
                                                <TableCell
                                                    class="hidden sm:table-cell"
                                                >
                                                    Réclammation
                                                </TableCell>
                                                <TableCell
                                                    class="hidden sm:table-cell"
                                                >
                                                    <Badge
                                                        class="text-xs"
                                                        variant="secondary"
                                                    >
                                                        OK
                                                    </Badge>
                                                </TableCell>
                                                <TableCell
                                                    class="hidden md:table-cell"
                                                >
                                                    2023-06-26
                                                </TableCell>
                                                <TableCell class="text-right">
                                                    $450.00
                                                </TableCell>
                                            </TableRow>
                                            <TableRow>
                                                <TableCell>
                                                    <div class="font-medium">
                                                        Liam Johnson
                                                    </div>
                                                    <div
                                                        class="hidden text-sm text-muted-foreground md:inline"
                                                    >
                                                        liam@example.com
                                                    </div>
                                                </TableCell>
                                                <TableCell
                                                    class="hidden sm:table-cell"
                                                >
                                                    Réclammation
                                                </TableCell>
                                                <TableCell
                                                    class="hidden sm:table-cell"
                                                >
                                                    <Badge
                                                        class="text-xs"
                                                        variant="secondary"
                                                    >
                                                        OK
                                                    </Badge>
                                                </TableCell>
                                                <TableCell
                                                    class="hidden md:table-cell"
                                                >
                                                    2023-06-23
                                                </TableCell>
                                                <TableCell class="text-right">
                                                    $250.00
                                                </TableCell>
                                            </TableRow>
                                            <TableRow>
                                                <TableCell>
                                                    <div class="font-medium">
                                                        Liam Johnson
                                                    </div>
                                                    <div
                                                        class="hidden text-sm text-muted-foreground md:inline"
                                                    >
                                                        liam@example.com
                                                    </div>
                                                </TableCell>
                                                <TableCell
                                                    class="hidden sm:table-cell"
                                                >
                                                    Réclammation
                                                </TableCell>
                                                <TableCell
                                                    class="hidden sm:table-cell"
                                                >
                                                    <Badge
                                                        class="text-xs"
                                                        variant="secondary"
                                                    >
                                                        OK
                                                    </Badge>
                                                </TableCell>
                                                <TableCell
                                                    class="hidden md:table-cell"
                                                >
                                                    2023-06-23
                                                </TableCell>
                                                <TableCell class="text-right">
                                                    $250.00
                                                </TableCell>
                                            </TableRow>
                                            <TableRow>
                                                <TableCell>
                                                    <div class="font-medium">
                                                        Olivia Smith
                                                    </div>
                                                    <div
                                                        class="hidden text-sm text-muted-foreground md:inline"
                                                    >
                                                        olivia@example.com
                                                    </div>
                                                </TableCell>
                                                <TableCell
                                                    class="hidden sm:table-cell"
                                                >
                                                    Demande d'information
                                                </TableCell>
                                                <TableCell
                                                    class="hidden sm:table-cell"
                                                >
                                                    <Badge
                                                        class="text-xs"
                                                        variant="outline"
                                                    >
                                                        PAS OK
                                                    </Badge>
                                                </TableCell>
                                                <TableCell
                                                    class="hidden md:table-cell"
                                                >
                                                    2023-06-24
                                                </TableCell>
                                                <TableCell class="text-right">
                                                    $150.00
                                                </TableCell>
                                            </TableRow>
                                            <TableRow>
                                                <TableCell>
                                                    <div class="font-medium">
                                                        Emma Brown
                                                    </div>
                                                    <div
                                                        class="hidden text-sm text-muted-foreground md:inline"
                                                    >
                                                        emma@example.com
                                                    </div>
                                                </TableCell>
                                                <TableCell
                                                    class="hidden sm:table-cell"
                                                >
                                                    Réclammation
                                                </TableCell>
                                                <TableCell
                                                    class="hidden sm:table-cell"
                                                >
                                                    <Badge
                                                        class="text-xs"
                                                        variant="secondary"
                                                    >
                                                        OK
                                                    </Badge>
                                                </TableCell>
                                                <TableCell
                                                    class="hidden md:table-cell"
                                                >
                                                    2023-06-26
                                                </TableCell>
                                                <TableCell class="text-right">
                                                    $450.00
                                                </TableCell>
                                            </TableRow>
                                        </TableBody>
                                    </Table>
                                </CardContent>
                            </Card>
                        </TabsContent>
                    </Tabs>
                </div>
            </main>
        </div>
    </AdminLayout>
</template>
