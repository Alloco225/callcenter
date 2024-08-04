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

import AgentDashboard from "@/Pages/Dashboard/AgentDashboard.vue";
import AdminDashboard from "@/Pages/Dashboard/AdminDashboard.vue";
import ClientDashboard from "@/Pages/Dashboard/ClientDashboard.vue";
import SupervisorDashboard from "@/Pages/Dashboard/SupervisorDashboard.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Dashboard" />

    {{$page.props}}
    <AdminDashboard v-if="$page.props.auth.user.role_id == 'Admin'" />
    <AgentDashboard v-if="$page.props.auth.user.role_id == 'Agent'" />
    <ClientDashboard v-if="$page.props.auth.user.role_id == 'Client'" />
    <SupervisorDashboard v-if="$page.props.auth.user.role_id == 'Supervisor'" />
    <!-- <agent-dashboard /> -->
</template>
